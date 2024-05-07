# ApiApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pdfWebapiAddnumberPost**](ApiApi.md#pdfWebapiAddnumberPost) | **POST** /pdf/webapi/addnumber | Adds page numbers to the provided documents with the specified alignment, starting number, and format.
[**pdfWebapiBinaryComparisonPost**](ApiApi.md#pdfWebapiBinaryComparisonPost) | **POST** /pdf/webapi/BinaryComparison | Performs a binary comparison on the provided files.
[**pdfWebapiChatpdfPost**](ApiApi.md#pdfWebapiChatpdfPost) | **POST** /pdf/webapi/chatpdf | Generates a PDF document based on the provided files and question.
[**pdfWebapiComparisonPost**](ApiApi.md#pdfWebapiComparisonPost) | **POST** /pdf/webapi/Comparison | Compare provided files and create document with marked changes.
[**pdfWebapiCompressPost**](ApiApi.md#pdfWebapiCompressPost) | **POST** /pdf/webapi/compress | Compresses the provided files using the specified compression level.
[**pdfWebapiConvertPost**](ApiApi.md#pdfWebapiConvertPost) | **POST** /pdf/webapi/convert | Converts the provided files from one format to another, with options for XML conversion and font size adjustment.
[**pdfWebapiConvertWebpagePost**](ApiApi.md#pdfWebapiConvertWebpagePost) | **POST** /pdf/webapi/convert-webpage | Converts a web page to the specified output format.
[**pdfWebapiCropPost**](ApiApi.md#pdfWebapiCropPost) | **POST** /pdf/webapi/crop | Crops the provided files to the specified dimensions.
[**pdfWebapiDownloadIdGet**](ApiApi.md#pdfWebapiDownloadIdGet) | **GET** /pdf/webapi/download/{id} | Downloads a file.
[**pdfWebapiDownloadStreamIdPost**](ApiApi.md#pdfWebapiDownloadStreamIdPost) | **POST** /pdf/webapi/download-stream/{id} | Downloads a file as a stream.
[**pdfWebapiEsignPost**](ApiApi.md#pdfWebapiEsignPost) | **POST** /pdf/webapi/esign | Electronically signs the provided files with the specified certificate and its password.
[**pdfWebapiExtractPost**](ApiApi.md#pdfWebapiExtractPost) | **POST** /pdf/webapi/extract | Extracts tables from the provided documents and converts them to the specified output format.
[**pdfWebapiFormFillerPost**](ApiApi.md#pdfWebapiFormFillerPost) | **POST** /pdf/webapi/form-filler | Fills a form with the provided files.
[**pdfWebapiGifPost**](ApiApi.md#pdfWebapiGifPost) | **POST** /pdf/webapi/gif | Creates a GIF from the provided images.
[**pdfWebapiHashPost**](ApiApi.md#pdfWebapiHashPost) | **POST** /pdf/webapi/hash | Hashes the provided files using the specified algorithm.
[**pdfWebapiLockPost**](ApiApi.md#pdfWebapiLockPost) | **POST** /pdf/webapi/lock | Locks a document with the provided password and optional files.
[**pdfWebapiMergePost**](ApiApi.md#pdfWebapiMergePost) | **POST** /pdf/webapi/merge | Merges the provided files into a single document or image, with options for orientation and page size.
[**pdfWebapiMetadataPost**](ApiApi.md#pdfWebapiMetadataPost) | **POST** /pdf/webapi/metadata | Performs metadata operations on the provided files.
[**pdfWebapiMusicVideoPost**](ApiApi.md#pdfWebapiMusicVideoPost) | **POST** /pdf/webapi/music-video | Creates a music video from the provided files.
[**pdfWebapiOrganizePost**](ApiApi.md#pdfWebapiOrganizePost) | **POST** /pdf/webapi/Organize | Organizes the provided documents by removing or moving specified pages.
[**pdfWebapiParsePost**](ApiApi.md#pdfWebapiParsePost) | **POST** /pdf/webapi/parse | Parses the provided files using a parser service.
[**pdfWebapiRedactPost**](ApiApi.md#pdfWebapiRedactPost) | **POST** /pdf/webapi/redact | Redacts specified text from the provided documents, with options to search case-sensitively, target in text, comments, and metadata.
[**pdfWebapiRemoveIdPost**](ApiApi.md#pdfWebapiRemoveIdPost) | **POST** /pdf/webapi/remove/{id} | Removes all files from processing.
[**pdfWebapiRemovePost**](ApiApi.md#pdfWebapiRemovePost) | **POST** /pdf/webapi/remove | Removes annotations from the provided documents.
[**pdfWebapiRemoveWatermarkPost**](ApiApi.md#pdfWebapiRemoveWatermarkPost) | **POST** /pdf/webapi/remove-watermark | Removes a watermark from the provided files.
[**pdfWebapiRemovepagesPost**](ApiApi.md#pdfWebapiRemovepagesPost) | **POST** /pdf/webapi/removepages | Removes specified pages from the provided files.
[**pdfWebapiRepairPost**](ApiApi.md#pdfWebapiRepairPost) | **POST** /pdf/webapi/repair | Repairs the provided files.
[**pdfWebapiResizePost**](ApiApi.md#pdfWebapiResizePost) | **POST** /pdf/webapi/resize | Resizes the provided files to the specified dimensions or using a preset size.
[**pdfWebapiRotatePost**](ApiApi.md#pdfWebapiRotatePost) | **POST** /pdf/webapi/rotate | Rotates the provided files by a specified angle, with options for rotation type and page number.
[**pdfWebapiSearchPost**](ApiApi.md#pdfWebapiSearchPost) | **POST** /pdf/webapi/search | Searches the provided files for the specified query and makr found text with yellow background.
[**pdfWebapiSearchablePost**](ApiApi.md#pdfWebapiSearchablePost) | **POST** /pdf/webapi/searchable | Converts the provided files into a searchable PDF format for the specified language.
[**pdfWebapiSignaturePost**](ApiApi.md#pdfWebapiSignaturePost) | **POST** /pdf/webapi/Signature | Adds a signature to the provided files.
[**pdfWebapiSplitdocPost**](ApiApi.md#pdfWebapiSplitdocPost) | **POST** /pdf/webapi/splitdoc | Splits the provided documents based on the specified split type and page rage to spit.
[**pdfWebapiSplitimagePost**](ApiApi.md#pdfWebapiSplitimagePost) | **POST** /pdf/webapi/splitimage | Splits the provided images into smaller parts based on the specified parameters.
[**pdfWebapiStatusIdPost**](ApiApi.md#pdfWebapiStatusIdPost) | **POST** /pdf/webapi/status/{id} | Retrieves the status of a processing.
[**pdfWebapiUnlockPost**](ApiApi.md#pdfWebapiUnlockPost) | **POST** /pdf/webapi/unlock | Attempts to unlock a document with an password and associated files.
[**pdfWebapiVerifyEsignPost**](ApiApi.md#pdfWebapiVerifyEsignPost) | **POST** /pdf/webapi/verify_esign | Verifies the electronic signature of the provided files.
[**pdfWebapiWatermarkPost**](ApiApi.md#pdfWebapiWatermarkPost) | **POST** /pdf/webapi/watermark | Adds a watermark to the provided files.
[**pdfWebapiWordCounterPost**](ApiApi.md#pdfWebapiWordCounterPost) | **POST** /pdf/webapi/WordCounter | Counts the words in the provided files within the specified page range.
[**pdfWebapiXfaconvertPost**](ApiApi.md#pdfWebapiXfaconvertPost) | **POST** /pdf/webapi/xfaconvert | Converts the provided documents from XFA format to a different format.

<a name="pdfWebapiAddnumberPost"></a>
# **pdfWebapiAddnumberPost**
> FileResponse pdfWebapiAddnumberPost(files, vAlignment, hAlignment, startingNumber, sNumber, fNumber, margin, fontSize, format)

Adds page numbers to the provided documents with the specified alignment, starting number, and format.

This endpoint is used to add page numbers to the provided files with the specified alignment, starting number, and format.  If the addition is started, the response will contain a success status and an optional message.  If the addition fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val vAlignment : kotlin.String = vAlignment_example // kotlin.String | The vertical alignment of the page numbers.
val hAlignment : kotlin.String = hAlignment_example // kotlin.String | The horizontal alignment of the page numbers.
val startingNumber : kotlin.Int = 56 // kotlin.Int | The starting number for the page numbers.
val sNumber : kotlin.Int = 56 // kotlin.Int | The number of the first page to start numbering from.
val fNumber : kotlin.Int = 56 // kotlin.Int | The number of the last page to end numbering at.
val margin : kotlin.Int = 56 // kotlin.Int | The margin around the page numbers.
val fontSize : kotlin.Int = 56 // kotlin.Int | The font size of the page numbers.
val format : kotlin.String = format_example // kotlin.String | The format of the page numbers.
try {
    val result : FileResponse = apiInstance.pdfWebapiAddnumberPost(files, vAlignment, hAlignment, startingNumber, sNumber, fNumber, margin, fontSize, format)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiAddnumberPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiAddnumberPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **vAlignment** | **kotlin.String**| The vertical alignment of the page numbers. | [optional]
 **hAlignment** | **kotlin.String**| The horizontal alignment of the page numbers. | [optional]
 **startingNumber** | **kotlin.Int**| The starting number for the page numbers. | [optional]
 **sNumber** | **kotlin.Int**| The number of the first page to start numbering from. | [optional]
 **fNumber** | **kotlin.Int**| The number of the last page to end numbering at. | [optional]
 **margin** | **kotlin.Int**| The margin around the page numbers. | [optional]
 **fontSize** | **kotlin.Int**| The font size of the page numbers. | [optional]
 **format** | **kotlin.String**| The format of the page numbers. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiBinaryComparisonPost"></a>
# **pdfWebapiBinaryComparisonPost**
> FileResponse pdfWebapiBinaryComparisonPost(files)

Performs a binary comparison on the provided files.

This endpoint is used to perform a binary comparison on the provided files.  If the comparison is started, the response will contain a success status and an optional message.  If the comparison fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
try {
    val result : FileResponse = apiInstance.pdfWebapiBinaryComparisonPost(files)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiBinaryComparisonPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiBinaryComparisonPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiChatpdfPost"></a>
# **pdfWebapiChatpdfPost**
> FileResponse pdfWebapiChatpdfPost(files, mode, question)

Generates a PDF document based on the provided files and question.

This endpoint is used to generate a PDF document based on the provided files and question.  If the generation is started, the response will contain a success status and an optional message.  If the generation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val mode : kotlin.Int = 56 // kotlin.Int | The mode of operation for the PDF generation.
val question : kotlin.String = question_example // kotlin.String | The question to be included in the PDF.
try {
    val result : FileResponse = apiInstance.pdfWebapiChatpdfPost(files, mode, question)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiChatpdfPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiChatpdfPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **mode** | **kotlin.Int**| The mode of operation for the PDF generation. | [optional]
 **question** | **kotlin.String**| The question to be included in the PDF. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiComparisonPost"></a>
# **pdfWebapiComparisonPost**
> FileResponse pdfWebapiComparisonPost(files)

Compare provided files and create document with marked changes.

This endpoint is used to compare the provided files.  If the comparison is started, the response will contain a success status and an optional message.  If the comparison fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
try {
    val result : FileResponse = apiInstance.pdfWebapiComparisonPost(files)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiComparisonPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiComparisonPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiCompressPost"></a>
# **pdfWebapiCompressPost**
> FileResponse pdfWebapiCompressPost(files, compressType)

Compresses the provided files using the specified compression level.

This endpoint is used to compress the provided files using the specified compression level.  If the compression is started, the response will contain a success status and an optional message.  If the compression fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val compressType : kotlin.Int = 56 // kotlin.Int | The level of compression to use.
try {
    val result : FileResponse = apiInstance.pdfWebapiCompressPost(files, compressType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiCompressPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiCompressPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **compressType** | **kotlin.Int**| The level of compression to use. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiConvertPost"></a>
# **pdfWebapiConvertPost**
> FileResponse pdfWebapiConvertPost(files, inputType, outputType, xmlType, xmlTag, fontSise, isToSingle, separator)

Converts the provided files from one format to another, with options for XML conversion and font size adjustment.

This endpoint is used to convert the provided files from one format to another.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
val xmlType : kotlin.Int = 56 // kotlin.Int | The type of XML conversion to perform, if applicable.
val xmlTag : kotlin.String = xmlTag_example // kotlin.String | The XML tag to use for conversion, if applicable.
val fontSise : kotlin.Int = 56 // kotlin.Int | 
val isToSingle : kotlin.Boolean = true // kotlin.Boolean | Indicates whether the conversion should result in a single file, if applicable.
val separator : kotlin.String = separator_example // kotlin.String | The separator to use when converting, if applicable.
try {
    val result : FileResponse = apiInstance.pdfWebapiConvertPost(files, inputType, outputType, xmlType, xmlTag, fontSise, isToSingle, separator)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiConvertPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiConvertPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]
 **xmlType** | **kotlin.Int**| The type of XML conversion to perform, if applicable. | [optional]
 **xmlTag** | **kotlin.String**| The XML tag to use for conversion, if applicable. | [optional]
 **fontSise** | **kotlin.Int**|  | [optional]
 **isToSingle** | **kotlin.Boolean**| Indicates whether the conversion should result in a single file, if applicable. | [optional]
 **separator** | **kotlin.String**| The separator to use when converting, if applicable. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiConvertWebpagePost"></a>
# **pdfWebapiConvertWebpagePost**
> FileResponse pdfWebapiConvertWebpagePost(webPage, outputType)

Converts a web page to the specified output format.

This endpoint is used to convert a web page to the specified output format.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val webPage : kotlin.String = webPage_example // kotlin.String | 
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output file.
try {
    val result : FileResponse = apiInstance.pdfWebapiConvertWebpagePost(webPage, outputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiConvertWebpagePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiConvertWebpagePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webPage** | **kotlin.String**|  | [optional]
 **outputType** | **kotlin.String**| The desired format for the output file. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiCropPost"></a>
# **pdfWebapiCropPost**
> FileResponse pdfWebapiCropPost(files, inputType, top, right, bottom, left, outputType)

Crops the provided files to the specified dimensions.

This endpoint is used to crop the provided files to the specified dimensions.  If the cropping is started, the response will contain a success status and an optional message.  If the cropping fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val top : kotlin.Int = 56 // kotlin.Int | The number of pixels to crop from the top.
val right : kotlin.Int = 56 // kotlin.Int | The number of pixels to crop from the right.
val bottom : kotlin.Int = 56 // kotlin.Int | The number of pixels to crop from the bottom.
val left : kotlin.Int = 56 // kotlin.Int | The number of pixels to crop from the left.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
try {
    val result : FileResponse = apiInstance.pdfWebapiCropPost(files, inputType, top, right, bottom, left, outputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiCropPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiCropPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **top** | **kotlin.Int**| The number of pixels to crop from the top. | [optional]
 **right** | **kotlin.Int**| The number of pixels to crop from the right. | [optional]
 **bottom** | **kotlin.Int**| The number of pixels to crop from the bottom. | [optional]
 **left** | **kotlin.Int**| The number of pixels to crop from the left. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiDownloadIdGet"></a>
# **pdfWebapiDownloadIdGet**
> pdfWebapiDownloadIdGet(id, file)

Downloads a file.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val id : kotlin.String = id_example // kotlin.String | The id of the processing to download.
val file : kotlin.String = file_example // kotlin.String | The name of the file to download.
try {
    apiInstance.pdfWebapiDownloadIdGet(id, file)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiDownloadIdGet")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiDownloadIdGet")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **kotlin.String**| The id of the processing to download. |
 **file** | **kotlin.String**| The name of the file to download. | [optional]

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

<a name="pdfWebapiDownloadStreamIdPost"></a>
# **pdfWebapiDownloadStreamIdPost**
> FileResponse pdfWebapiDownloadStreamIdPost(id, fileName)

Downloads a file as a stream.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val id : kotlin.String = id_example // kotlin.String | The ID of the processing to download.
val fileName : kotlin.String = fileName_example // kotlin.String | The name of the file to download.
try {
    val result : FileResponse = apiInstance.pdfWebapiDownloadStreamIdPost(id, fileName)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiDownloadStreamIdPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiDownloadStreamIdPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **kotlin.String**| The ID of the processing to download. |
 **fileName** | **kotlin.String**| The name of the file to download. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiEsignPost"></a>
# **pdfWebapiEsignPost**
> FileResponse pdfWebapiEsignPost(files, inputType, passw)

Electronically signs the provided files with the specified certificate and its password.

This endpoint is used to electronically sign the provided files with the specified certificate and its password.  If the signing is started, the response will contain a success status and an optional message.  If the signing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val passw : kotlin.String = passw_example // kotlin.String | The password to use for electronic signing.
try {
    val result : FileResponse = apiInstance.pdfWebapiEsignPost(files, inputType, passw)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiEsignPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiEsignPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **passw** | **kotlin.String**| The password to use for electronic signing. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiExtractPost"></a>
# **pdfWebapiExtractPost**
> FileResponse pdfWebapiExtractPost(files, inputType, outputType)

Extracts tables from the provided documents and converts them to the specified output format.

This endpoint is used to extract tables from the provided files and convert them to the specified output format.  If the extraction is started, the response will contain a success status and an optional message.  If the extraction fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
try {
    val result : FileResponse = apiInstance.pdfWebapiExtractPost(files, inputType, outputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiExtractPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiExtractPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiFormFillerPost"></a>
# **pdfWebapiFormFillerPost**
> FileResponse pdfWebapiFormFillerPost(files, fileName)

Fills a form with the provided files.

This endpoint is used to fill a form with the provided files.  If the filling is started, the response will contain a success status and an optional message.  If the filling fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val fileName : kotlin.String = fileName_example // kotlin.String | The name of the file to fill the form with.
try {
    val result : FileResponse = apiInstance.pdfWebapiFormFillerPost(files, fileName)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiFormFillerPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiFormFillerPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **fileName** | **kotlin.String**| The name of the file to fill the form with. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiGifPost"></a>
# **pdfWebapiGifPost**
> FileResponse pdfWebapiGifPost(keepImagesAsIs, resizeToImage, streched, width, height, frameTimes)

Creates a GIF from the provided images.

This endpoint is used to create a GIF from the provided images.  If the creation is started, the response will contain a success status and an optional message.  If the creation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val keepImagesAsIs : kotlin.Boolean = true // kotlin.Boolean | Indicates whether the images should be kept as is.
val resizeToImage : kotlin.Int = 56 // kotlin.Int | The index of the image to resize the other images to.
val streched : kotlin.Boolean = true // kotlin.Boolean | 
val width : kotlin.Int = 56 // kotlin.Int | The width of the GIF.
val height : kotlin.Int = 56 // kotlin.Int | The height of the GIF.
val frameTimes : kotlin.String = frameTimes_example // kotlin.String | The times for each frame in the GIF.
try {
    val result : FileResponse = apiInstance.pdfWebapiGifPost(keepImagesAsIs, resizeToImage, streched, width, height, frameTimes)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiGifPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiGifPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keepImagesAsIs** | **kotlin.Boolean**| Indicates whether the images should be kept as is. | [optional]
 **resizeToImage** | **kotlin.Int**| The index of the image to resize the other images to. | [optional]
 **streched** | **kotlin.Boolean**|  | [optional]
 **width** | **kotlin.Int**| The width of the GIF. | [optional]
 **height** | **kotlin.Int**| The height of the GIF. | [optional]
 **frameTimes** | **kotlin.String**| The times for each frame in the GIF. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiHashPost"></a>
# **pdfWebapiHashPost**
> FileResponse pdfWebapiHashPost(files, inputType, outputType, alg)

Hashes the provided files using the specified algorithm.

This endpoint is used to hash the provided files using the specified algorithm.  If the hashing is started, the response will contain a success status and an optional message.  If the hashing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
val alg : kotlin.String = alg_example // kotlin.String | The hashing algorithm to use.
try {
    val result : FileResponse = apiInstance.pdfWebapiHashPost(files, inputType, outputType, alg)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiHashPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiHashPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]
 **alg** | **kotlin.String**| The hashing algorithm to use. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiLockPost"></a>
# **pdfWebapiLockPost**
> FileResponse pdfWebapiLockPost(files, passw)

Locks a document with the provided password and optional files.

This endpoint is used to lock a resource with an optional password and associated files.  If the lock is started, the response will contain a success status and processing id.  If the lock fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val passw : kotlin.String = passw_example // kotlin.String | The password required to lock the resource.
try {
    val result : FileResponse = apiInstance.pdfWebapiLockPost(files, passw)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiLockPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiLockPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **passw** | **kotlin.String**| The password required to lock the resource. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiMergePost"></a>
# **pdfWebapiMergePost**
> FileResponse pdfWebapiMergePost(files, inputType, outputType, horizontal, vertical, pageSize, dcIsLandscape)

Merges the provided files into a single document or image, with options for orientation and page size.

This endpoint is used to merge the provided files into a single document or image.  If the merge is started, the response will contain a success status and an optional message.  If the merge fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output file.
val horizontal : kotlin.Int = 56 // kotlin.Int | The number of images to merge horizontally, if applicable.
val vertical : kotlin.Int = 56 // kotlin.Int | The number of images to merge vertically, if applicable.
val pageSize : kotlin.String = pageSize_example // kotlin.String | The page size for the output file, if applicable.
val dcIsLandscape : kotlin.Boolean = true // kotlin.Boolean | Indicates whether the output file should be in landscape orientation.
try {
    val result : FileResponse = apiInstance.pdfWebapiMergePost(files, inputType, outputType, horizontal, vertical, pageSize, dcIsLandscape)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiMergePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiMergePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output file. | [optional]
 **horizontal** | **kotlin.Int**| The number of images to merge horizontally, if applicable. | [optional]
 **vertical** | **kotlin.Int**| The number of images to merge vertically, if applicable. | [optional]
 **pageSize** | **kotlin.String**| The page size for the output file, if applicable. | [optional]
 **dcIsLandscape** | **kotlin.Boolean**| Indicates whether the output file should be in landscape orientation. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiMetadataPost"></a>
# **pdfWebapiMetadataPost**
> FileResponse pdfWebapiMetadataPost(files, opration, folder, name)

Performs metadata operations on the provided files.

This endpoint is used to perform metadata operations on the provided files.  If the operation is started, the response will contain a success status and an optional message.  If the operation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val opration : kotlin.String = opration_example // kotlin.String | 
val folder : kotlin.String = folder_example // kotlin.String | The folder where the files are located.
val name : kotlin.String = name_example // kotlin.String | The name of the file to perform the operation on.
try {
    val result : FileResponse = apiInstance.pdfWebapiMetadataPost(files, opration, folder, name)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiMetadataPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiMetadataPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **opration** | **kotlin.String**|  | [optional]
 **folder** | **kotlin.String**| The folder where the files are located. | [optional]
 **name** | **kotlin.String**| The name of the file to perform the operation on. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiMusicVideoPost"></a>
# **pdfWebapiMusicVideoPost**
> FileResponse pdfWebapiMusicVideoPost(files, interval, outputType)

Creates a music video from the provided files.

This endpoint is used to create a music video from the provided files.  If the creation is started, the response will contain a success status and an optional message.  If the creation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val interval : kotlin.Int = 56 // kotlin.Int | The interval between frames in the music video.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
try {
    val result : FileResponse = apiInstance.pdfWebapiMusicVideoPost(files, interval, outputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiMusicVideoPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiMusicVideoPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **interval** | **kotlin.Int**| The interval between frames in the music video. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiOrganizePost"></a>
# **pdfWebapiOrganizePost**
> FileResponse pdfWebapiOrganizePost(files, inputType, remove, move)

Organizes the provided documents by removing or moving specified pages.

This endpoint is used to organize the provided documents by removing or moving specified pages.  If the organization is started, the response will contain a success status and an optional message.  If the organization fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val remove : kotlin.String = remove_example // kotlin.String | The pages to remove from the document.
val move : kotlin.String = move_example // kotlin.String | The pages to move within the document.
try {
    val result : FileResponse = apiInstance.pdfWebapiOrganizePost(files, inputType, remove, move)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiOrganizePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiOrganizePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **remove** | **kotlin.String**| The pages to remove from the document. | [optional]
 **move** | **kotlin.String**| The pages to move within the document. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiParsePost"></a>
# **pdfWebapiParsePost**
> FileResponse pdfWebapiParsePost(files)

Parses the provided files using a parser service.

This endpoint is used to send files to a parser service for processing.  If the parsing is started, the response will contain a success status and an optional message.  If the parsing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
try {
    val result : FileResponse = apiInstance.pdfWebapiParsePost(files)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiParsePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiParsePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiRedactPost"></a>
# **pdfWebapiRedactPost**
> FileResponse pdfWebapiRedactPost(files, searchQuery, replaceText, caseSensitive, text, comments, metadata)

Redacts specified text from the provided documents, with options to search case-sensitively, target in text, comments, and metadata.

This endpoint is used to redact specified text from the provided files, with options to search case-sensitively and target different parts of the document such as text, comments, and metadata.  If the redaction is started, the response will contain a success status and an optional message.  If the redaction fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val searchQuery : kotlin.String = searchQuery_example // kotlin.String | The text to search for and redact.
val replaceText : kotlin.String = replaceText_example // kotlin.String | The text to replace the found text with.
val caseSensitive : kotlin.Boolean = true // kotlin.Boolean | Indicates whether the search should be case-sensitive.
val text : kotlin.Boolean = true // kotlin.Boolean | Indicates whether text should be redacted.
val comments : kotlin.Boolean = true // kotlin.Boolean | Indicates whether comments should be redacted.
val metadata : kotlin.Boolean = true // kotlin.Boolean | Indicates whether metadata should be redacted.
try {
    val result : FileResponse = apiInstance.pdfWebapiRedactPost(files, searchQuery, replaceText, caseSensitive, text, comments, metadata)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiRedactPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiRedactPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **searchQuery** | **kotlin.String**| The text to search for and redact. | [optional]
 **replaceText** | **kotlin.String**| The text to replace the found text with. | [optional]
 **caseSensitive** | **kotlin.Boolean**| Indicates whether the search should be case-sensitive. | [optional]
 **text** | **kotlin.Boolean**| Indicates whether text should be redacted. | [optional]
 **comments** | **kotlin.Boolean**| Indicates whether comments should be redacted. | [optional]
 **metadata** | **kotlin.Boolean**| Indicates whether metadata should be redacted. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiRemoveIdPost"></a>
# **pdfWebapiRemoveIdPost**
> FileResponse pdfWebapiRemoveIdPost(id)

Removes all files from processing.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val id : kotlin.String = id_example // kotlin.String | The ID of the processing to remove.
try {
    val result : FileResponse = apiInstance.pdfWebapiRemoveIdPost(id)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiRemoveIdPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiRemoveIdPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **kotlin.String**| The ID of the processing to remove. |

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiRemovePost"></a>
# **pdfWebapiRemovePost**
> FileResponse pdfWebapiRemovePost(files)

Removes annotations from the provided documents.

This endpoint is used to remove annotations from the provided files.  If the removal is started, the response will contain a success status and an optional message.  If the removal fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
try {
    val result : FileResponse = apiInstance.pdfWebapiRemovePost(files)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiRemovePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiRemovePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiRemoveWatermarkPost"></a>
# **pdfWebapiRemoveWatermarkPost**
> FileResponse pdfWebapiRemoveWatermarkPost(watermarkText, top, left, bottom, right, files, isAllPages, watermarkType, removeRange)

Removes a watermark from the provided files.

This endpoint is used to remove a watermark from the provided files.  If the removal is started, the response will contain a success status and an optional message.  If the removal fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val watermarkText : kotlin.String = watermarkText_example // kotlin.String | 
val top : kotlin.Int = 56 // kotlin.Int | 
val left : kotlin.Int = 56 // kotlin.Int | 
val bottom : kotlin.Int = 56 // kotlin.Int | 
val right : kotlin.Int = 56 // kotlin.Int | 
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val isAllPages : kotlin.Boolean = true // kotlin.Boolean | Indicates whether the watermark should be removed from all pages.
val watermarkType : kotlin.String = watermarkType_example // kotlin.String | The type of watermark to remove.
val removeRange : kotlin.String = removeRange_example // kotlin.String | The range of pages to remove the watermark from.
try {
    val result : FileResponse = apiInstance.pdfWebapiRemoveWatermarkPost(watermarkText, top, left, bottom, right, files, isAllPages, watermarkType, removeRange)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiRemoveWatermarkPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiRemoveWatermarkPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **watermarkText** | **kotlin.String**|  | [optional]
 **top** | **kotlin.Int**|  | [optional]
 **left** | **kotlin.Int**|  | [optional]
 **bottom** | **kotlin.Int**|  | [optional]
 **right** | **kotlin.Int**|  | [optional]
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **isAllPages** | **kotlin.Boolean**| Indicates whether the watermark should be removed from all pages. | [optional]
 **watermarkType** | **kotlin.String**| The type of watermark to remove. | [optional]
 **removeRange** | **kotlin.String**| The range of pages to remove the watermark from. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiRemovepagesPost"></a>
# **pdfWebapiRemovepagesPost**
> FileResponse pdfWebapiRemovepagesPost(files, removeRange)

Removes specified pages from the provided files.

This endpoint is used to remove specified pages from the provided files.  If the removal is started, the response will contain a success status and an optional message.  If the removal fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val removeRange : kotlin.String = removeRange_example // kotlin.String | The range of pages to remove from the files.
try {
    val result : FileResponse = apiInstance.pdfWebapiRemovepagesPost(files, removeRange)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiRemovepagesPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiRemovepagesPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **removeRange** | **kotlin.String**| The range of pages to remove from the files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiRepairPost"></a>
# **pdfWebapiRepairPost**
> FileResponse pdfWebapiRepairPost(files)

Repairs the provided files.

This endpoint is used to repair the provided files.  If the repair is started, the response will contain a success status and an optional message.  If the repair fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
try {
    val result : FileResponse = apiInstance.pdfWebapiRepairPost(files)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiRepairPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiRepairPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiResizePost"></a>
# **pdfWebapiResizePost**
> FileResponse pdfWebapiResizePost(files, inputType, outputType, resizeType, presetType, presetSize, width, height, percentage, useProportions, pageSize)

Resizes the provided files to the specified dimensions or using a preset size.

This endpoint is used to resize the provided files to the specified dimensions or using a preset size.  If the resizing is started, the response will contain a success status and an optional message.  If the resizing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
val resizeType : kotlin.Int = 56 // kotlin.Int | The type of resizing to apply.
val presetType : kotlin.String = presetType_example // kotlin.String | The type of preset size to use for resizing.
val presetSize : kotlin.String = presetSize_example // kotlin.String | The preset size to use for resizing.
val width : kotlin.Int = 56 // kotlin.Int | The desired width of the resized files.
val height : kotlin.Int = 56 // kotlin.Int | The desired height of the resized files.
val percentage : kotlin.Int = 56 // kotlin.Int | The percentage to resize the files by.
val useProportions : kotlin.Boolean = true // kotlin.Boolean | Indicates whether to maintain the aspect ratio when resizing.
val pageSize : kotlin.String = pageSize_example // kotlin.String | The page size to use for the resized files.
try {
    val result : FileResponse = apiInstance.pdfWebapiResizePost(files, inputType, outputType, resizeType, presetType, presetSize, width, height, percentage, useProportions, pageSize)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiResizePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiResizePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]
 **resizeType** | **kotlin.Int**| The type of resizing to apply. | [optional]
 **presetType** | **kotlin.String**| The type of preset size to use for resizing. | [optional]
 **presetSize** | **kotlin.String**| The preset size to use for resizing. | [optional]
 **width** | **kotlin.Int**| The desired width of the resized files. | [optional]
 **height** | **kotlin.Int**| The desired height of the resized files. | [optional]
 **percentage** | **kotlin.Int**| The percentage to resize the files by. | [optional]
 **useProportions** | **kotlin.Boolean**| Indicates whether to maintain the aspect ratio when resizing. | [optional]
 **pageSize** | **kotlin.String**| The page size to use for the resized files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiRotatePost"></a>
# **pdfWebapiRotatePost**
> FileResponse pdfWebapiRotatePost(files, angle, rotateType, pageNum)

Rotates the provided files by a specified angle, with options for rotation type and page number.

This endpoint is used to rotate the provided files by a specified angle.  If the rotation is started, the response will contain a success status and an optional message.  If the rotation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val angle : kotlin.Int = 56 // kotlin.Int | The angle by which to rotate the files.
val rotateType : kotlin.String = rotateType_example // kotlin.String | The type of rotation to perform.
val pageNum : kotlin.String = pageNum_example // kotlin.String | The page number to rotate, if applicable.
try {
    val result : FileResponse = apiInstance.pdfWebapiRotatePost(files, angle, rotateType, pageNum)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiRotatePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiRotatePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **angle** | **kotlin.Int**| The angle by which to rotate the files. | [optional]
 **rotateType** | **kotlin.String**| The type of rotation to perform. | [optional]
 **pageNum** | **kotlin.String**| The page number to rotate, if applicable. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiSearchPost"></a>
# **pdfWebapiSearchPost**
> FileResponse pdfWebapiSearchPost(files, query)

Searches the provided files for the specified query and makr found text with yellow background.

This endpoint is used to search the provided files for the specified query.  If the search is started, the response will contain a success status and an optional message.  If the search fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val query : kotlin.String = query_example // kotlin.String | The text to search for within the files.
try {
    val result : FileResponse = apiInstance.pdfWebapiSearchPost(files, query)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiSearchPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiSearchPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **query** | **kotlin.String**| The text to search for within the files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiSearchablePost"></a>
# **pdfWebapiSearchablePost**
> FileResponse pdfWebapiSearchablePost(files, lang)

Converts the provided files into a searchable PDF format for the specified language.

This endpoint is used to convert the provided files into a searchable PDF format for the specified language.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val lang : kotlin.String = lang_example // kotlin.String | The language of the files to be converted.
try {
    val result : FileResponse = apiInstance.pdfWebapiSearchablePost(files, lang)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiSearchablePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiSearchablePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **lang** | **kotlin.String**| The language of the files to be converted. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiSignaturePost"></a>
# **pdfWebapiSignaturePost**
> FileResponse pdfWebapiSignaturePost(files, inputType, outputType, signatureType)

Adds a signature to the provided files.

This endpoint is used to add a signature to the provided files.  If the addition is started, the response will contain a success status and an optional message.  If the addition fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
val signatureType : kotlin.String = signatureType_example // kotlin.String | The type of signature to add.
try {
    val result : FileResponse = apiInstance.pdfWebapiSignaturePost(files, inputType, outputType, signatureType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiSignaturePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiSignaturePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]
 **signatureType** | **kotlin.String**| The type of signature to add. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiSplitdocPost"></a>
# **pdfWebapiSplitdocPost**
> FileResponse pdfWebapiSplitdocPost(files, splitType, pars)

Splits the provided documents based on the specified split type and page rage to spit.

This endpoint is used to split documents based on the specified split type and page rage.  If the splitting is started, the response will contain a success status and an optional message.  If the splitting fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val splitType : kotlin.Int = 56 // kotlin.Int | The type of splitting to be performed.
val pars : kotlin.String = pars_example // kotlin.String | Optional page rage for the splitting operation.
try {
    val result : FileResponse = apiInstance.pdfWebapiSplitdocPost(files, splitType, pars)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiSplitdocPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiSplitdocPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **splitType** | **kotlin.Int**| The type of splitting to be performed. | [optional]
 **pars** | **kotlin.String**| Optional page rage for the splitting operation. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiSplitimagePost"></a>
# **pdfWebapiSplitimagePost**
> FileResponse pdfWebapiSplitimagePost(files, splitType, vertical, horizontal, outputType)

Splits the provided images into smaller parts based on the specified parameters.

This endpoint is used to split images into smaller parts based on the specified parameters.  If the splitting is started, the response will contain a success status and an optional message.  If the splitting fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val splitType : kotlin.Int = 56 // kotlin.Int | The type of splitting to be performed.
val vertical : kotlin.Int = 56 // kotlin.Int | The number of vertical splits to create.
val horizontal : kotlin.Int = 56 // kotlin.Int | The number of horizontal splits to create.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired output format for the split images.
try {
    val result : FileResponse = apiInstance.pdfWebapiSplitimagePost(files, splitType, vertical, horizontal, outputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiSplitimagePost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiSplitimagePost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **splitType** | **kotlin.Int**| The type of splitting to be performed. | [optional]
 **vertical** | **kotlin.Int**| The number of vertical splits to create. | [optional]
 **horizontal** | **kotlin.Int**| The number of horizontal splits to create. | [optional]
 **outputType** | **kotlin.String**| The desired output format for the split images. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiStatusIdPost"></a>
# **pdfWebapiStatusIdPost**
> FileResponse pdfWebapiStatusIdPost(id)

Retrieves the status of a processing.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val id : kotlin.String = id_example // kotlin.String | The ID of the processing to check the status of.
try {
    val result : FileResponse = apiInstance.pdfWebapiStatusIdPost(id)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiStatusIdPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiStatusIdPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **kotlin.String**| The ID of the processing to check the status of. |

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiUnlockPost"></a>
# **pdfWebapiUnlockPost**
> FileResponse pdfWebapiUnlockPost(files, passw)

Attempts to unlock a document with an password and associated files.

This endpoint is used to unlock a resource that was previously locked with a password on associated files.  If the unlock is started, the response will contain a success status and an optional message.  If the unlock fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val passw : kotlin.String = passw_example // kotlin.String | The password used in locked document.
try {
    val result : FileResponse = apiInstance.pdfWebapiUnlockPost(files, passw)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiUnlockPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiUnlockPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **passw** | **kotlin.String**| The password used in locked document. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiVerifyEsignPost"></a>
# **pdfWebapiVerifyEsignPost**
> FileResponse pdfWebapiVerifyEsignPost(files, inputType)

Verifies the electronic signature of the provided files.

This endpoint is used to verify the electronic signature of the provided files.  If the verification is started, the response will contain a success status and an optional message.  If the verification fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
try {
    val result : FileResponse = apiInstance.pdfWebapiVerifyEsignPost(files, inputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiVerifyEsignPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiVerifyEsignPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiWatermarkPost"></a>
# **pdfWebapiWatermarkPost**
> FileResponse pdfWebapiWatermarkPost(isText, text, name2, size, bold, italic, underlined, color, contentType, contentDisposition, headers, length, name, fileName, isBackground, rotation, transparency, layer, pageFrom, pageTo, files, inputType, outputType)

Adds a watermark to the provided files.

This endpoint is used to add a watermark to the provided files.  If the addition is started, the response will contain a success status and an optional message.  If the addition fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val isText : kotlin.Boolean = true // kotlin.Boolean | 
val text : kotlin.String = text_example // kotlin.String | 
val name2 : kotlin.String = name_example // kotlin.String | 
val size : kotlin.Int = 56 // kotlin.Int | 
val bold : kotlin.Boolean = true // kotlin.Boolean | 
val italic : kotlin.Boolean = true // kotlin.Boolean | 
val underlined : kotlin.Boolean = true // kotlin.Boolean | 
val color : kotlin.String = color_example // kotlin.String | 
val contentType : kotlin.String = contentType_example // kotlin.String | 
val contentDisposition : kotlin.String = contentDisposition_example // kotlin.String | 
val headers : kotlin.collections.Map<kotlin.String, kotlin.Array<kotlin.String>> =  // kotlin.collections.Map<kotlin.String, kotlin.Array<kotlin.String>> | 
val length : kotlin.Long = 789 // kotlin.Long | 
val name : kotlin.String = name_example // kotlin.String | 
val fileName : kotlin.String = fileName_example // kotlin.String | 
val isBackground : kotlin.Boolean = true // kotlin.Boolean | 
val rotation : kotlin.Int = 56 // kotlin.Int | 
val transparency : kotlin.Float = 3.4 // kotlin.Float | 
val layer : kotlin.Boolean = true // kotlin.Boolean | 
val pageFrom : kotlin.Int = 56 // kotlin.Int | 
val pageTo : kotlin.Int = 56 // kotlin.Int | 
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
val outputType : kotlin.String = outputType_example // kotlin.String | The desired format for the output files.
try {
    val result : FileResponse = apiInstance.pdfWebapiWatermarkPost(isText, text, name2, size, bold, italic, underlined, color, contentType, contentDisposition, headers, length, name, fileName, isBackground, rotation, transparency, layer, pageFrom, pageTo, files, inputType, outputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiWatermarkPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiWatermarkPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isText** | **kotlin.Boolean**|  | [optional]
 **text** | **kotlin.String**|  | [optional]
 **name2** | **kotlin.String**|  | [optional]
 **size** | **kotlin.Int**|  | [optional]
 **bold** | **kotlin.Boolean**|  | [optional]
 **italic** | **kotlin.Boolean**|  | [optional]
 **underlined** | **kotlin.Boolean**|  | [optional]
 **color** | **kotlin.String**|  | [optional]
 **contentType** | **kotlin.String**|  | [optional]
 **contentDisposition** | **kotlin.String**|  | [optional]
 **headers** | [**kotlin.collections.Map&lt;kotlin.String, kotlin.Array&lt;kotlin.String&gt;&gt;**](kotlin.Array&lt;kotlin.String&gt;.md)|  | [optional]
 **length** | **kotlin.Long**|  | [optional]
 **name** | **kotlin.String**|  | [optional]
 **fileName** | **kotlin.String**|  | [optional]
 **isBackground** | **kotlin.Boolean**|  | [optional]
 **rotation** | **kotlin.Int**|  | [optional]
 **transparency** | **kotlin.Float**|  | [optional]
 **layer** | **kotlin.Boolean**|  | [optional]
 **pageFrom** | **kotlin.Int**|  | [optional]
 **pageTo** | **kotlin.Int**|  | [optional]
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]
 **outputType** | **kotlin.String**| The desired format for the output files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiWordCounterPost"></a>
# **pdfWebapiWordCounterPost**
> FileResponse pdfWebapiWordCounterPost(files, pageRange)

Counts the words in the provided files within the specified page range.

This endpoint is used to count the words in the provided files within the specified page range.  If the counting is started, the response will contain a success status and the word count.  If the counting fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val pageRange : kotlin.String = pageRange_example // kotlin.String | The range of pages to count words in.
try {
    val result : FileResponse = apiInstance.pdfWebapiWordCounterPost(files, pageRange)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiWordCounterPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiWordCounterPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **pageRange** | **kotlin.String**| The range of pages to count words in. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiXfaconvertPost"></a>
# **pdfWebapiXfaconvertPost**
> FileResponse pdfWebapiXfaconvertPost(files, inputType)

Converts the provided documents from XFA format to a different format.

This endpoint is used to convert the provided files from XFA format to a different format.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```kotlin
// Import classes:
//import io.swagger.client.infrastructure.*
//import io.swagger.client.models.*;

val apiInstance = ApiApi()
val files : kotlin.Array<kotlin.Array<kotlin.Byte>> =  // kotlin.Array<kotlin.Array<kotlin.Byte>> | 
val inputType : kotlin.String = inputType_example // kotlin.String | The format of the input files.
try {
    val result : FileResponse = apiInstance.pdfWebapiXfaconvertPost(files, inputType)
    println(result)
} catch (e: ClientException) {
    println("4xx response calling ApiApi#pdfWebapiXfaconvertPost")
    e.printStackTrace()
} catch (e: ServerException) {
    println("5xx response calling ApiApi#pdfWebapiXfaconvertPost")
    e.printStackTrace()
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**kotlin.Array&lt;kotlin.Array&lt;kotlin.Byte&gt;&gt;**](kotlin.Array&lt;kotlin.Byte&gt;.md)|  | [optional]
 **inputType** | **kotlin.String**| The format of the input files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

