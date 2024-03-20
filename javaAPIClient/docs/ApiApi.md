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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String vAlignment = "vAlignment_example"; // String | The vertical alignment of the page numbers.
String hAlignment = "hAlignment_example"; // String | The horizontal alignment of the page numbers.
Integer startingNumber = 56; // Integer | The starting number for the page numbers.
Integer sNumber = 56; // Integer | The number of the first page to start numbering from.
Integer fNumber = 56; // Integer | The number of the last page to end numbering at.
Integer margin = 56; // Integer | The margin around the page numbers.
Integer fontSize = 56; // Integer | The font size of the page numbers.
String format = "format_example"; // String | The format of the page numbers.
try {
    FileResponse result = apiInstance.pdfWebapiAddnumberPost(files, vAlignment, hAlignment, startingNumber, sNumber, fNumber, margin, fontSize, format);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiAddnumberPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **vAlignment** | **String**| The vertical alignment of the page numbers. | [optional]
 **hAlignment** | **String**| The horizontal alignment of the page numbers. | [optional]
 **startingNumber** | **Integer**| The starting number for the page numbers. | [optional]
 **sNumber** | **Integer**| The number of the first page to start numbering from. | [optional]
 **fNumber** | **Integer**| The number of the last page to end numbering at. | [optional]
 **margin** | **Integer**| The margin around the page numbers. | [optional]
 **fontSize** | **Integer**| The font size of the page numbers. | [optional]
 **format** | **String**| The format of the page numbers. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
try {
    FileResponse result = apiInstance.pdfWebapiBinaryComparisonPost(files);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiBinaryComparisonPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Integer mode = 56; // Integer | The mode of operation for the PDF generation.
String question = "question_example"; // String | The question to be included in the PDF.
try {
    FileResponse result = apiInstance.pdfWebapiChatpdfPost(files, mode, question);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiChatpdfPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **mode** | **Integer**| The mode of operation for the PDF generation. | [optional]
 **question** | **String**| The question to be included in the PDF. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
try {
    FileResponse result = apiInstance.pdfWebapiComparisonPost(files);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiComparisonPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Integer compressType = 56; // Integer | The level of compression to use.
try {
    FileResponse result = apiInstance.pdfWebapiCompressPost(files, compressType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiCompressPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **compressType** | **Integer**| The level of compression to use. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
Integer xmlType = 56; // Integer | The type of XML conversion to perform, if applicable.
String xmlTag = "xmlTag_example"; // String | The XML tag to use for conversion, if applicable.
Integer fontSise = 56; // Integer | 
Boolean isToSingle = true; // Boolean | Indicates whether the conversion should result in a single file, if applicable.
String separator = "separator_example"; // String | The separator to use when converting, if applicable.
try {
    FileResponse result = apiInstance.pdfWebapiConvertPost(files, inputType, outputType, xmlType, xmlTag, fontSise, isToSingle, separator);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiConvertPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]
 **xmlType** | **Integer**| The type of XML conversion to perform, if applicable. | [optional]
 **xmlTag** | **String**| The XML tag to use for conversion, if applicable. | [optional]
 **fontSise** | **Integer**|  | [optional]
 **isToSingle** | **Boolean**| Indicates whether the conversion should result in a single file, if applicable. | [optional]
 **separator** | **String**| The separator to use when converting, if applicable. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String webPage = "webPage_example"; // String | 
String outputType = "outputType_example"; // String | The desired format for the output file.
try {
    FileResponse result = apiInstance.pdfWebapiConvertWebpagePost(webPage, outputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiConvertWebpagePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webPage** | **String**|  | [optional]
 **outputType** | **String**| The desired format for the output file. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
Integer top = 56; // Integer | The number of pixels to crop from the top.
Integer right = 56; // Integer | The number of pixels to crop from the right.
Integer bottom = 56; // Integer | The number of pixels to crop from the bottom.
Integer left = 56; // Integer | The number of pixels to crop from the left.
String outputType = "outputType_example"; // String | The desired format for the output files.
try {
    FileResponse result = apiInstance.pdfWebapiCropPost(files, inputType, top, right, bottom, left, outputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiCropPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **top** | **Integer**| The number of pixels to crop from the top. | [optional]
 **right** | **Integer**| The number of pixels to crop from the right. | [optional]
 **bottom** | **Integer**| The number of pixels to crop from the bottom. | [optional]
 **left** | **Integer**| The number of pixels to crop from the left. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String id = "id_example"; // String | The id of the processing to download.
String file = "file_example"; // String | The name of the file to download.
try {
    apiInstance.pdfWebapiDownloadIdGet(id, file);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiDownloadIdGet");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **String**| The id of the processing to download. |
 **file** | **String**| The name of the file to download. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String id = "id_example"; // String | The ID of the processing to download.
String fileName = "fileName_example"; // String | The name of the file to download.
try {
    FileResponse result = apiInstance.pdfWebapiDownloadStreamIdPost(id, fileName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiDownloadStreamIdPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **String**| The ID of the processing to download. |
 **fileName** | **String**| The name of the file to download. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String passw = "passw_example"; // String | The password to use for electronic signing.
try {
    FileResponse result = apiInstance.pdfWebapiEsignPost(files, inputType, passw);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiEsignPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **passw** | **String**| The password to use for electronic signing. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
try {
    FileResponse result = apiInstance.pdfWebapiExtractPost(files, inputType, outputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiExtractPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String fileName = "fileName_example"; // String | The name of the file to fill the form with.
try {
    FileResponse result = apiInstance.pdfWebapiFormFillerPost(files, fileName);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiFormFillerPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **fileName** | **String**| The name of the file to fill the form with. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
Boolean keepImagesAsIs = true; // Boolean | Indicates whether the images should be kept as is.
Integer resizeToImage = 56; // Integer | The index of the image to resize the other images to.
Boolean streched = true; // Boolean | 
Integer width = 56; // Integer | The width of the GIF.
Integer height = 56; // Integer | The height of the GIF.
String frameTimes = "frameTimes_example"; // String | The times for each frame in the GIF.
try {
    FileResponse result = apiInstance.pdfWebapiGifPost(keepImagesAsIs, resizeToImage, streched, width, height, frameTimes);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiGifPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keepImagesAsIs** | **Boolean**| Indicates whether the images should be kept as is. | [optional]
 **resizeToImage** | **Integer**| The index of the image to resize the other images to. | [optional]
 **streched** | **Boolean**|  | [optional]
 **width** | **Integer**| The width of the GIF. | [optional]
 **height** | **Integer**| The height of the GIF. | [optional]
 **frameTimes** | **String**| The times for each frame in the GIF. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
String alg = "alg_example"; // String | The hashing algorithm to use.
try {
    FileResponse result = apiInstance.pdfWebapiHashPost(files, inputType, outputType, alg);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiHashPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]
 **alg** | **String**| The hashing algorithm to use. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String passw = "passw_example"; // String | The password required to lock the resource.
try {
    FileResponse result = apiInstance.pdfWebapiLockPost(files, passw);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiLockPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **passw** | **String**| The password required to lock the resource. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output file.
Integer horizontal = 56; // Integer | The number of images to merge horizontally, if applicable.
Integer vertical = 56; // Integer | The number of images to merge vertically, if applicable.
String pageSize = "pageSize_example"; // String | The page size for the output file, if applicable.
Boolean dcIsLandscape = true; // Boolean | Indicates whether the output file should be in landscape orientation.
try {
    FileResponse result = apiInstance.pdfWebapiMergePost(files, inputType, outputType, horizontal, vertical, pageSize, dcIsLandscape);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiMergePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output file. | [optional]
 **horizontal** | **Integer**| The number of images to merge horizontally, if applicable. | [optional]
 **vertical** | **Integer**| The number of images to merge vertically, if applicable. | [optional]
 **pageSize** | **String**| The page size for the output file, if applicable. | [optional]
 **dcIsLandscape** | **Boolean**| Indicates whether the output file should be in landscape orientation. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiMetadataPost"></a>
# **pdfWebapiMetadataPost**
> FileResponse pdfWebapiMetadataPost(files, operation, folder, name)

Performs metadata operations on the provided files.

This endpoint is used to perform metadata operations on the provided files.  If the operation is started, the response will contain a success status and an optional message.  If the operation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String operation = "operation_example"; // String | 
String folder = "folder_example"; // String | The folder where the files are located.
String name = "name_example"; // String | The name of the file to perform the operation on.
try {
    FileResponse result = apiInstance.pdfWebapiMetadataPost(files, operation, folder, name);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiMetadataPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **operation** | **String**|  | [optional]
 **folder** | **String**| The folder where the files are located. | [optional]
 **name** | **String**| The name of the file to perform the operation on. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Integer interval = 56; // Integer | The interval between frames in the music video.
String outputType = "outputType_example"; // String | The desired format for the output files.
try {
    FileResponse result = apiInstance.pdfWebapiMusicVideoPost(files, interval, outputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiMusicVideoPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **interval** | **Integer**| The interval between frames in the music video. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String remove = "remove_example"; // String | The pages to remove from the document.
String move = "move_example"; // String | The pages to move within the document.
try {
    FileResponse result = apiInstance.pdfWebapiOrganizePost(files, inputType, remove, move);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiOrganizePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **remove** | **String**| The pages to remove from the document. | [optional]
 **move** | **String**| The pages to move within the document. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
try {
    FileResponse result = apiInstance.pdfWebapiParsePost(files);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiParsePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String searchQuery = "searchQuery_example"; // String | The text to search for and redact.
String replaceText = "replaceText_example"; // String | The text to replace the found text with.
Boolean caseSensitive = true; // Boolean | Indicates whether the search should be case-sensitive.
Boolean text = true; // Boolean | Indicates whether text should be redacted.
Boolean comments = true; // Boolean | Indicates whether comments should be redacted.
Boolean metadata = true; // Boolean | Indicates whether metadata should be redacted.
try {
    FileResponse result = apiInstance.pdfWebapiRedactPost(files, searchQuery, replaceText, caseSensitive, text, comments, metadata);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiRedactPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **searchQuery** | **String**| The text to search for and redact. | [optional]
 **replaceText** | **String**| The text to replace the found text with. | [optional]
 **caseSensitive** | **Boolean**| Indicates whether the search should be case-sensitive. | [optional]
 **text** | **Boolean**| Indicates whether text should be redacted. | [optional]
 **comments** | **Boolean**| Indicates whether comments should be redacted. | [optional]
 **metadata** | **Boolean**| Indicates whether metadata should be redacted. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String id = "id_example"; // String | The ID of the processing to remove.
try {
    FileResponse result = apiInstance.pdfWebapiRemoveIdPost(id);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiRemoveIdPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **String**| The ID of the processing to remove. |

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
try {
    FileResponse result = apiInstance.pdfWebapiRemovePost(files);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiRemovePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String watermarkText = "watermarkText_example"; // String | 
Integer top = 56; // Integer | 
Integer left = 56; // Integer | 
Integer bottom = 56; // Integer | 
Integer right = 56; // Integer | 
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Boolean isAllPages = true; // Boolean | Indicates whether the watermark should be removed from all pages.
String watermarkType = "watermarkType_example"; // String | The type of watermark to remove.
String removeRange = "removeRange_example"; // String | The range of pages to remove the watermark from.
try {
    FileResponse result = apiInstance.pdfWebapiRemoveWatermarkPost(watermarkText, top, left, bottom, right, files, isAllPages, watermarkType, removeRange);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiRemoveWatermarkPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **watermarkText** | **String**|  | [optional]
 **top** | **Integer**|  | [optional]
 **left** | **Integer**|  | [optional]
 **bottom** | **Integer**|  | [optional]
 **right** | **Integer**|  | [optional]
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **isAllPages** | **Boolean**| Indicates whether the watermark should be removed from all pages. | [optional]
 **watermarkType** | **String**| The type of watermark to remove. | [optional]
 **removeRange** | **String**| The range of pages to remove the watermark from. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String removeRange = "removeRange_example"; // String | The range of pages to remove from the files.
try {
    FileResponse result = apiInstance.pdfWebapiRemovepagesPost(files, removeRange);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiRemovepagesPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **removeRange** | **String**| The range of pages to remove from the files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
try {
    FileResponse result = apiInstance.pdfWebapiRepairPost(files);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiRepairPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
Integer resizeType = 56; // Integer | The type of resizing to apply.
String presetType = "presetType_example"; // String | The type of preset size to use for resizing.
String presetSize = "presetSize_example"; // String | The preset size to use for resizing.
Integer width = 56; // Integer | The desired width of the resized files.
Integer height = 56; // Integer | The desired height of the resized files.
Integer percentage = 56; // Integer | The percentage to resize the files by.
Boolean useProportions = true; // Boolean | Indicates whether to maintain the aspect ratio when resizing.
String pageSize = "pageSize_example"; // String | The page size to use for the resized files.
try {
    FileResponse result = apiInstance.pdfWebapiResizePost(files, inputType, outputType, resizeType, presetType, presetSize, width, height, percentage, useProportions, pageSize);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiResizePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]
 **resizeType** | **Integer**| The type of resizing to apply. | [optional]
 **presetType** | **String**| The type of preset size to use for resizing. | [optional]
 **presetSize** | **String**| The preset size to use for resizing. | [optional]
 **width** | **Integer**| The desired width of the resized files. | [optional]
 **height** | **Integer**| The desired height of the resized files. | [optional]
 **percentage** | **Integer**| The percentage to resize the files by. | [optional]
 **useProportions** | **Boolean**| Indicates whether to maintain the aspect ratio when resizing. | [optional]
 **pageSize** | **String**| The page size to use for the resized files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Integer angle = 56; // Integer | The angle by which to rotate the files.
String rotateType = "rotateType_example"; // String | The type of rotation to perform.
String pageNum = "pageNum_example"; // String | The page number to rotate, if applicable.
try {
    FileResponse result = apiInstance.pdfWebapiRotatePost(files, angle, rotateType, pageNum);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiRotatePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **angle** | **Integer**| The angle by which to rotate the files. | [optional]
 **rotateType** | **String**| The type of rotation to perform. | [optional]
 **pageNum** | **String**| The page number to rotate, if applicable. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String query = "query_example"; // String | The text to search for within the files.
try {
    FileResponse result = apiInstance.pdfWebapiSearchPost(files, query);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiSearchPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **query** | **String**| The text to search for within the files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String lang = "lang_example"; // String | The language of the files to be converted.
try {
    FileResponse result = apiInstance.pdfWebapiSearchablePost(files, lang);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiSearchablePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **lang** | **String**| The language of the files to be converted. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
String signatureType = "signatureType_example"; // String | The type of signature to add.
try {
    FileResponse result = apiInstance.pdfWebapiSignaturePost(files, inputType, outputType, signatureType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiSignaturePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]
 **signatureType** | **String**| The type of signature to add. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Integer splitType = 56; // Integer | The type of splitting to be performed.
String pars = "pars_example"; // String | Optional page rage for the splitting operation.
try {
    FileResponse result = apiInstance.pdfWebapiSplitdocPost(files, splitType, pars);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiSplitdocPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **splitType** | **Integer**| The type of splitting to be performed. | [optional]
 **pars** | **String**| Optional page rage for the splitting operation. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Integer splitType = 56; // Integer | The type of splitting to be performed.
Integer vertical = 56; // Integer | The number of vertical splits to create.
Integer horizontal = 56; // Integer | The number of horizontal splits to create.
String outputType = "outputType_example"; // String | The desired output format for the split images.
try {
    FileResponse result = apiInstance.pdfWebapiSplitimagePost(files, splitType, vertical, horizontal, outputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiSplitimagePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **splitType** | **Integer**| The type of splitting to be performed. | [optional]
 **vertical** | **Integer**| The number of vertical splits to create. | [optional]
 **horizontal** | **Integer**| The number of horizontal splits to create. | [optional]
 **outputType** | **String**| The desired output format for the split images. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String id = "id_example"; // String | The ID of the processing to check the status of.
try {
    FileResponse result = apiInstance.pdfWebapiStatusIdPost(id);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiStatusIdPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **String**| The ID of the processing to check the status of. |

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String passw = "passw_example"; // String | The password used in locked document.
try {
    FileResponse result = apiInstance.pdfWebapiUnlockPost(files, passw);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiUnlockPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **passw** | **String**| The password used in locked document. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
try {
    FileResponse result = apiInstance.pdfWebapiVerifyEsignPost(files, inputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiVerifyEsignPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
Boolean isText = true; // Boolean | 
String text = "text_example"; // String | 
String name2 = "name_example"; // String | 
Integer size = 56; // Integer | 
Boolean bold = true; // Boolean | 
Boolean italic = true; // Boolean | 
Boolean underlined = true; // Boolean | 
String color = "color_example"; // String | 
String contentType = "contentType_example"; // String | 
String contentDisposition = "contentDisposition_example"; // String | 
Map<String, List<String>> headers = new HashMap(); // Map<String, List<String>> | 
Long length = 789L; // Long | 
String name = "name_example"; // String | 
String fileName = "fileName_example"; // String | 
Boolean isBackground = true; // Boolean | 
Integer rotation = 56; // Integer | 
Float transparency = 3.4F; // Float | 
Boolean layer = true; // Boolean | 
Integer pageFrom = 56; // Integer | 
Integer pageTo = 56; // Integer | 
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
try {
    FileResponse result = apiInstance.pdfWebapiWatermarkPost(isText, text, name2, size, bold, italic, underlined, color, contentType, contentDisposition, headers, length, name, fileName, isBackground, rotation, transparency, layer, pageFrom, pageTo, files, inputType, outputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiWatermarkPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isText** | **Boolean**|  | [optional]
 **text** | **String**|  | [optional]
 **name2** | **String**|  | [optional]
 **size** | **Integer**|  | [optional]
 **bold** | **Boolean**|  | [optional]
 **italic** | **Boolean**|  | [optional]
 **underlined** | **Boolean**|  | [optional]
 **color** | **String**|  | [optional]
 **contentType** | **String**|  | [optional]
 **contentDisposition** | **String**|  | [optional]
 **headers** | [**Map&lt;String, List&lt;String&gt;&gt;**](List&lt;String&gt;.md)|  | [optional]
 **length** | **Long**|  | [optional]
 **name** | **String**|  | [optional]
 **fileName** | **String**|  | [optional]
 **isBackground** | **Boolean**|  | [optional]
 **rotation** | **Integer**|  | [optional]
 **transparency** | **Float**|  | [optional]
 **layer** | **Boolean**|  | [optional]
 **pageFrom** | **Integer**|  | [optional]
 **pageTo** | **Integer**|  | [optional]
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String pageRange = "pageRange_example"; // String | The range of pages to count words in.
try {
    FileResponse result = apiInstance.pdfWebapiWordCounterPost(files, pageRange);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiWordCounterPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **pageRange** | **String**| The range of pages to count words in. | [optional]

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
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
try {
    FileResponse result = apiInstance.pdfWebapiXfaconvertPost(files, inputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiXfaconvertPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

