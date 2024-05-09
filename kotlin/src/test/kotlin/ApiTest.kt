
import io.swagger.client.apis.ApiApi
import okhttp3.*
import okhttp3.MediaType.Companion.toMediaTypeOrNull
import okhttp3.RequestBody.Companion.asRequestBody
import org.junit.Test
import java.io.File
import java.io.IOException

class ApiApiTest {

    private val api = ApiApi("http://localhost:5000/")

    @Test
    fun pdfWebapiComparisonPostTest() {
        val file = File("/home/tigra/Service/TestData/test.pdf")
        val fileBytes = file.readBytes()
        val files = arrayOf(fileBytes.toTypedArray())
        val response = api.pdfWebapiComparisonPost(files)
        println("Response Code: ${response.code}")
        println("Response Message: ${response.message}")
        println("Response Headers: ${response.headers}")

// Вывод тела ответа
        val responseBody = response.body?.string()
        println("Response Body: $responseBody")
    }

    @Test
    fun testManualUpload(){
        val url = "http://localhost:5000/pdf/webapi/Comparison"

        val filePath = "/home/tigra/Service/TestData/test.pdf"

        val file = File(filePath)

        val client = OkHttpClient()

        val requestBody = MultipartBody.Builder()
            .setType(MultipartBody.FORM)
            .addFormDataPart(
                "file",
                file.name,
                file.asRequestBody("application/pdf".toMediaTypeOrNull())
            )
            .build()

        val request = Request.Builder()
            .url(url)
            .post(requestBody)
            .build()

        try {
            val response = client.newCall(request).execute()
            if (response.isSuccessful) {
                println("Response received: ${response.code}")
                println(response.body?.string())
            } else {
                println("Request failed: ${response.code}")
            }
        } catch (e: IOException) {
            println("Request failed: ${e.message}")
        }
    }
}