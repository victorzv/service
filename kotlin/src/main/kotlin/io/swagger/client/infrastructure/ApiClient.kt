package io.swagger.client.infrastructure

import okhttp3.*
import okhttp3.HttpUrl.Companion.toHttpUrlOrNull
import okhttp3.MediaType.Companion.toMediaTypeOrNull
import java.io.File

open class ApiClient(val baseUrl: String) {
    companion object {
        protected const val ContentType = "Content-Type"
        protected const val Accept = "Accept"
        protected const val JsonMediaType = "application/json"
        protected const val FormDataMediaType = "multipart/form-data"
        protected const val XmlMediaType = "application/xml"

        @JvmStatic
        val client: OkHttpClient = OkHttpClient()

        @JvmStatic
        var defaultHeaders: Map<String, String> by ApplicationDelegates.setOnce(mapOf(ContentType to JsonMediaType, Accept to JsonMediaType))

        @JvmStatic
        val jsonHeaders: Map<String, String> = mapOf(ContentType to JsonMediaType, Accept to JsonMediaType)
    }

    private fun guessMimeType(file: File): String {
        val fileName = file.name
        val extension = fileName.substringAfterLast('.', "")
        return when (extension.toLowerCase()) {
            "pdf" -> "application/pdf"
            "doc" -> "application/msword"
            "docx" -> "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            "xls" -> "application/vnd.ms-excel"
            "xlsx" -> "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
            "txt" -> "text/plain"
            "png" -> "image/png"
            "jpg", "jpeg" -> "image/jpeg"
            "gif" -> "image/gif"
            "bmp" -> "image/bmp"
            else -> "application/octet-stream"
        }
    }

    protected inline fun <reified T> requestBody(content: T, mediaType: String = JsonMediaType): RequestBody {

        return when {
            content is File -> RequestBody.create(mediaType.toMediaTypeOrNull(), content)

            mediaType == FormDataMediaType -> {
                val requestBodyBuilder = MultipartBody.Builder().setType(MultipartBody.FORM)
                when {
                    content is Map<*, *> -> {
                        println("Key: $content, Value type: ${content?.javaClass?.simpleName}")
                        // Handle form data
                        @Suppress("UNCHECKED_CAST")
                        (content as Map<*, *>).forEach { key, value ->
                            // Проверяем, является ли значение массивом байтов
                            if (value is ByteArray) {
                                // Если значение является массивом байтов, добавляем его как файловое содержимое
                                val fileName = "file$key"
                                requestBodyBuilder.addFormDataPart(
                                    key.toString(),
                                    fileName,
                                    RequestBody.create("application/octet-stream".toMediaTypeOrNull(), value)
                                )
                            } else {
                                // Если значение не является массивом байтов, обрабатываем его как обычное поле формы
                                requestBodyBuilder.addFormDataPart(key.toString(), value.toString())
                            }
                        }
                    }
                    else -> throw IllegalArgumentException("Unsupported content type for FormDataMediaType")
                }
                requestBodyBuilder.build()
            }

//                var builder = FormBody.Builder()
//                // content's type *must* be Map<String, Any>
//                @Suppress("UNCHECKED_CAST")
//                (content as Map<String, String>).forEach { key, value ->
//                    builder = builder.add(key, value)
//                }
//                builder.build()


            mediaType == JsonMediaType -> RequestBody.create(
                mediaType.toMediaTypeOrNull(), Serializer.moshi.adapter(T::class.java).toJson(content)
            )

            mediaType == XmlMediaType -> TODO("xml not currently supported.")

            // TODO: this should be extended with other serializers
            else -> TODO("requestBody currently only supports JSON body and File body.")
        }
    }
    protected inline fun <reified T : Any?> responseBody(body: ResponseBody?, mediaType: String = JsonMediaType): T? {
        if (body == null) return null
        return when (mediaType) {
            JsonMediaType -> Serializer.moshi.adapter(T::class.java).fromJson(body.source())
            else -> TODO()
        }
    }

    protected inline fun <reified T : Any?> request(requestConfig: RequestConfig, body: Any? = null): Response/*ApiInfrastructureResponse<T?>*/ {
        val httpUrl = baseUrl.toHttpUrlOrNull() ?: throw IllegalStateException("baseUrl is invalid.")

        var urlBuilder = httpUrl.newBuilder()
                .addPathSegments(requestConfig.path.trimStart('/'))

        requestConfig.query.forEach { query ->
            query.value.forEach { queryValue ->
                urlBuilder = urlBuilder.addQueryParameter(query.key, queryValue)
            }
        }

        val url = urlBuilder.build()
        val headers = requestConfig.headers // + defaultHeaders

        if (headers[ContentType] ?: "" == "") {
            throw kotlin.IllegalStateException("Missing Content-Type header. This is required.")
        }

        if (headers[Accept] ?: "" == "") {
            throw kotlin.IllegalStateException("Missing Accept header. This is required.")
        }

        // TODO: support multiple contentType,accept options here.
        val contentType = (headers[ContentType] as String).substringBefore(";").toLowerCase()
        val accept = (headers[Accept] as String).substringBefore(";").toLowerCase()

        var request: Request.Builder = when (requestConfig.method) {
            RequestMethod.DELETE -> Request.Builder().url(url).delete()
            RequestMethod.GET -> Request.Builder().url(url)
            RequestMethod.HEAD -> Request.Builder().url(url).head()
            RequestMethod.PATCH -> Request.Builder().url(url).patch(requestBody(body, contentType))
            RequestMethod.PUT -> Request.Builder().url(url).put(requestBody(body, contentType))
            RequestMethod.POST -> Request.Builder().url(url).post(requestBody(body, contentType))
            RequestMethod.OPTIONS -> Request.Builder().url(url).method("OPTIONS", null)
        }

        headers.forEach { header -> request = request.addHeader(header.key, header.value.toString()) }

        val realRequest = request.build()
        val response = client.newCall(realRequest).execute()

        return response
//        // TODO: handle specific mapping types. e.g. Map<int, Class<?>>
//        when {
//            response.isRedirect -> return Redirection(
//                    response.code,
//                    response.headers.toMultimap()
//            )
//            response.isInformational -> return Informational(
//                    response.message,
//                    response.code,
//                    response.headers.toMultimap()
//            )
//            response.isSuccessful -> return Success(
//                    responseBody(response.body, accept),
//                    response.code,
//                    response.headers.toMultimap()
//            )
//            response.isClientError -> return ClientError(
//                    response.body?.string(),
//                    response.code,
//                    response.headers.toMultimap()
//            )
//            else -> return ServerError(
//                    null,
//                    response.body?.string(),
//                    response.code,
//                    response.headers.toMultimap()
//            )
//        }
    }
}