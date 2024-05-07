import io.swagger.client.apis.ApiApi
import io.swagger.client.infrastructure.ClientException
import io.swagger.client.infrastructure.ServerException
import io.swagger.client.models.FileResponse
import java.io.File

fun main(){
//
//    val api = ApiApi("http://localhost:5000")
//
//    val file = File("/home/tigra/Service/TestData/test.pdf")
//    val fileBytes = file.readBytes()
//    val files = arrayOf(fileBytes.toTypedArray())
//    val response = api.pdfWebapiComparisonPost(files)
//    println(response)


    val apiInstance = ApiApi("http://localhost:5000")

    val file = File("/home/tigra/Service/TestData/test.pdf")
    val fileBytes = file.readBytes()

    val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  arrayOf(fileBytes.toTypedArray())

        try {
            val result : FileResponse = apiInstance.pdfWebapiComparisonPost(files)
            println(result)
        } catch (e: ClientException) {
            println("4xx response calling ApiApi#pdfWebapiComparisonPost")
            println(e.message)
            e.printStackTrace()
        } catch (e: ServerException) {
            println("5xx response calling ApiApi#pdfWebapiComparisonPost")
            println(e.message)
            e.printStackTrace()
        }
}