
import io.swagger.client.apis.ApiApi
import org.junit.Test
import java.io.File

class ApiApiTest {

    private val api = ApiApi("http://localhost:5000/")

    @Test
    fun pdfWebapiComparisonPostTest() {
        val file = File("/home/tigra/Service/TestData/test.pdf")
        val fileBytes = file.readBytes()
        val files = arrayOf(fileBytes.toTypedArray())
        val response = api.pdfWebapiComparisonPost(files)
        println(response)
    }
}