# ApiApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pdfWebapiAddnumberPost**](ApiApi.md#pdfWebapiAddnumberPost) | **POST** /pdf/webapi/addnumber | Add page numbers to document.
[**pdfWebapiChangeFontsPost**](ApiApi.md#pdfWebapiChangeFontsPost) | **POST** /pdf/webapi/change-fonts | 
[**pdfWebapiComparisonPost**](ApiApi.md#pdfWebapiComparisonPost) | **POST** /pdf/webapi/comparison | Compare documents text.
[**pdfWebapiCompressPost**](ApiApi.md#pdfWebapiCompressPost) | **POST** /pdf/webapi/compress | Compress document.
[**pdfWebapiConvertPost**](ApiApi.md#pdfWebapiConvertPost) | **POST** /pdf/webapi/convert | Convert document to another format.
[**pdfWebapiConvertWebpagePost**](ApiApi.md#pdfWebapiConvertWebpagePost) | **POST** /pdf/webapi/convert-webpage | Convert web page to document.
[**pdfWebapiCropPost**](ApiApi.md#pdfWebapiCropPost) | **POST** /pdf/webapi/crop | Crop document.
[**pdfWebapiDownloadIdGet**](ApiApi.md#pdfWebapiDownloadIdGet) | **GET** /pdf/webapi/download/{id} | File download.
[**pdfWebapiEsignPost**](ApiApi.md#pdfWebapiEsignPost) | **POST** /pdf/webapi/esign | Sign document with certificate.
[**pdfWebapiExtractPost**](ApiApi.md#pdfWebapiExtractPost) | **POST** /pdf/webapi/extract | Extract tables from document.
[**pdfWebapiFormFillerPost**](ApiApi.md#pdfWebapiFormFillerPost) | **POST** /pdf/webapi/form-filler | Fill form.
[**pdfWebapiGifPost**](ApiApi.md#pdfWebapiGifPost) | **POST** /pdf/webapi/gif | Make GIF.
[**pdfWebapiHashPost**](ApiApi.md#pdfWebapiHashPost) | **POST** /pdf/webapi/hash | Calculate document hash.
[**pdfWebapiLockPost**](ApiApi.md#pdfWebapiLockPost) | **POST** /pdf/webapi/lock | Lock document.
[**pdfWebapiMergePost**](ApiApi.md#pdfWebapiMergePost) | **POST** /pdf/webapi/merge | Merge documents.
[**pdfWebapiMetadataPost**](ApiApi.md#pdfWebapiMetadataPost) | **POST** /pdf/webapi/metadata | Read and change document metadata.
[**pdfWebapiOrganizePost**](ApiApi.md#pdfWebapiOrganizePost) | **POST** /pdf/webapi/organize | Organize document pages.
[**pdfWebapiParsePost**](ApiApi.md#pdfWebapiParsePost) | **POST** /pdf/webapi/parse | Parse document.
[**pdfWebapiRedactPost**](ApiApi.md#pdfWebapiRedactPost) | **POST** /pdf/webapi/redact | Redact document text.
[**pdfWebapiRemoveIdPost**](ApiApi.md#pdfWebapiRemoveIdPost) | **POST** /pdf/webapi/remove/{id} | Remove stored files.
[**pdfWebapiRemovePost**](ApiApi.md#pdfWebapiRemovePost) | **POST** /pdf/webapi/remove | Remove document annotations.
[**pdfWebapiRemoveWatermarkPost**](ApiApi.md#pdfWebapiRemoveWatermarkPost) | **POST** /pdf/webapi/remove-watermark | Removes document watermark.
[**pdfWebapiRemovepagesPost**](ApiApi.md#pdfWebapiRemovepagesPost) | **POST** /pdf/webapi/removepages | Remove pages from document.
[**pdfWebapiRepairPost**](ApiApi.md#pdfWebapiRepairPost) | **POST** /pdf/webapi/repair | Repair document.
[**pdfWebapiResizePost**](ApiApi.md#pdfWebapiResizePost) | **POST** /pdf/webapi/resize | Resize document.
[**pdfWebapiRotatePost**](ApiApi.md#pdfWebapiRotatePost) | **POST** /pdf/webapi/rotate | Rotate document.
[**pdfWebapiSearchPost**](ApiApi.md#pdfWebapiSearchPost) | **POST** /pdf/webapi/search | Search document text.
[**pdfWebapiSearchablePost**](ApiApi.md#pdfWebapiSearchablePost) | **POST** /pdf/webapi/searchable | Make scanned pdf searchable.
[**pdfWebapiSignaturePost**](ApiApi.md#pdfWebapiSignaturePost) | **POST** /pdf/webapi/signature | Add signature to document.
[**pdfWebapiSplitdocPost**](ApiApi.md#pdfWebapiSplitdocPost) | **POST** /pdf/webapi/splitdoc | Split document.
[**pdfWebapiSplitimagePost**](ApiApi.md#pdfWebapiSplitimagePost) | **POST** /pdf/webapi/splitimage | Split image.
[**pdfWebapiStatusIdPost**](ApiApi.md#pdfWebapiStatusIdPost) | **POST** /pdf/webapi/status/{id} | Processing status.
[**pdfWebapiUnlockPost**](ApiApi.md#pdfWebapiUnlockPost) | **POST** /pdf/webapi/unlock | Unlock document.
[**pdfWebapiVerifyEsignPost**](ApiApi.md#pdfWebapiVerifyEsignPost) | **POST** /pdf/webapi/verify_esign | Verify document certificate.
[**pdfWebapiWatermarkPost**](ApiApi.md#pdfWebapiWatermarkPost) | **POST** /pdf/webapi/watermark | Add watermark to document.
[**pdfWebapiWordcounterPost**](ApiApi.md#pdfWebapiWordcounterPost) | **POST** /pdf/webapi/wordcounter | Count words and chars in document.
[**pdfWebapiXfaconvertPost**](ApiApi.md#pdfWebapiXfaconvertPost) | **POST** /pdf/webapi/xfaconvert | Convert XFA format to a another format.

<a name="pdfWebapiAddnumberPost"></a>
# **pdfWebapiAddnumberPost**
> FileResponse pdfWebapiAddnumberPost(files, vAlignment, hAlignment, startingNumber, sNumber, fNumber, margin, fontSize, format)

Add page numbers to document.

Adds page numbers to the provided documents with the specified alignment, starting number, and format.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
PageNumberVerticalAlign vAlignment = PageNumberVerticalAlign.B; // PageNumberVerticalAlign | The vertical alignment of the page numbers.
PageNumberHorizontalAlign hAlignment = PageNumberHorizontalAlign.C; // PageNumberHorizontalAlign | The horizontal alignment of the page numbers.
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
 **vAlignment** | [**PageNumberVerticalAlign**](.md)| The vertical alignment of the page numbers. | [optional]
 **hAlignment** | [**PageNumberHorizontalAlign**](.md)| The horizontal alignment of the page numbers. | [optional]
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

<a name="pdfWebapiChangeFontsPost"></a>
# **pdfWebapiChangeFontsPost**
> FileResponse pdfWebapiChangeFontsPost(fontReplacementsJson, files)



### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String fontReplacementsJson = "fontReplacementsJson_example"; // String | 
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
try {
    FileResponse result = apiInstance.pdfWebapiChangeFontsPost(fontReplacementsJson, files);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiChangeFontsPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fontReplacementsJson** | **String**|  | [optional]
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]

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

Compare documents text.

Compare provided files and create document with marked changes.

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

Compress document.

Compresses the provided files using the specified compression level.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
CompressType compressType = CompressType.HIGH; // CompressType | The level of compression to use.
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
 **compressType** | [**CompressType**](.md)| The level of compression to use. | [optional]

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

Convert document to another format.

Converts the provided files from one format to another.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
XmlType xmlType = XmlType.APS; // XmlType | The type of XML conversion to perform, if applicable.
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
 **xmlType** | [**XmlType**](.md)| The type of XML conversion to perform, if applicable. | [optional]
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

Convert web page to document.

Converts a web page to the specified output format.

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

Crop document.

Crops the provided files to the specified dimensions.

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

File download.

Downloads processed file.

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

<a name="pdfWebapiEsignPost"></a>
# **pdfWebapiEsignPost**
> FileResponse pdfWebapiEsignPost(passw, files, inputType)

Sign document with certificate.

Electronically signs the provided documents with the specified certificate.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String passw = "passw_example"; // String | 
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
try {
    FileResponse result = apiInstance.pdfWebapiEsignPost(passw, files, inputType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiEsignPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **passw** | **String**|  | [optional]
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]

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

Extract tables from document.

Extracts tables from the provided documents and converts them to the specified output format.

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

Fill form.

Fills a form with the provided files.

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
> FileResponse pdfWebapiGifPost(files, keepImagesAsIs, resizeToImage, streched, width, height, frameTimes)

Make GIF.

Creates a GIF from the provided images.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
Boolean keepImagesAsIs = true; // Boolean | Indicates whether the images should be kept as is.
Integer resizeToImage = 56; // Integer | The index of the image to resize the other images to.
Boolean streched = true; // Boolean | 
Integer width = 56; // Integer | The width of the GIF.
Integer height = 56; // Integer | The height of the GIF.
String frameTimes = "frameTimes_example"; // String | The times for each frame in the GIF.
try {
    FileResponse result = apiInstance.pdfWebapiGifPost(files, keepImagesAsIs, resizeToImage, streched, width, height, frameTimes);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiGifPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
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

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiHashPost"></a>
# **pdfWebapiHashPost**
> FileResponse pdfWebapiHashPost(files, inputType, outputType, alg)

Calculate document hash.

Calculate hashes of provided files using the specified algorithm.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
HashAlgorithm alg = HashAlgorithm.SHA1; // HashAlgorithm | The hashing algorithm to use.
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
 **alg** | [**HashAlgorithm**](.md)| The hashing algorithm to use. | [optional]

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

Lock document.

Locks a document with the provided password and optional files.

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
> FileResponse pdfWebapiMergePost(files, inputType, outputType, mergeType, horizontal, vertical, pageSize, dcIsLandscape)

Merge documents.

Merges the provided files into a single document or image, with options for orientation and page size.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output file.
MergeImageType mergeType = MergeImageType.VERTICAL; // MergeImageType | Type of merger operation.
Integer horizontal = 56; // Integer | The number of images to merge horizontally, if applicable.
Integer vertical = 56; // Integer | The number of images to merge vertically, if applicable.
PageSize pageSize = PageSize.A4; // PageSize | The page size for the output file, if applicable.
Boolean dcIsLandscape = true; // Boolean | Indicates whether the output file should be in landscape orientation.
try {
    FileResponse result = apiInstance.pdfWebapiMergePost(files, inputType, outputType, mergeType, horizontal, vertical, pageSize, dcIsLandscape);
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
 **mergeType** | [**MergeImageType**](.md)| Type of merger operation. | [optional]
 **horizontal** | **Integer**| The number of images to merge horizontally, if applicable. | [optional]
 **vertical** | **Integer**| The number of images to merge vertically, if applicable. | [optional]
 **pageSize** | [**PageSize**](.md)| The page size for the output file, if applicable. | [optional]
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

Read and change document metadata.

Performs metadata operations on the provided files.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
MetadataOperation operation = new MetadataOperation(); // MetadataOperation | The operation to perform on the metadata.
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
 **operation** | [**MetadataOperation**](.md)| The operation to perform on the metadata. | [optional]
 **folder** | **String**| The folder where the files are located. | [optional]
 **name** | **String**| The name of the file to perform the operation on. | [optional]

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

Organize document pages.

Organizes the provided documents by removing or moving specified pages.

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

Parse document.

Parses the provided files using a parser service.

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

Redact document text.

Redacts specified text from the provided documents, with options to search case-sensitively, target in text, comments, and metadata.

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

Remove stored files.

Removes processed files from storage.

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

Remove document annotations.

Removes annotations from the provided documents.

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

Removes document watermark.

Removes a watermark from the document pages.

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
WatermarkType watermarkType = new WatermarkType(); // WatermarkType | The type of watermark to remove.
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
 **watermarkType** | [**WatermarkType**](.md)| The type of watermark to remove. | [optional]
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

Remove pages from document.

Removes specified pages from the provided files.

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

Repair document.

Repairs the provided files.

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

Resize document.

Resizes the provided files to the specified dimensions or using a preset size.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
ResizeType resizeType = ResizeType.PERCENTAGE; // ResizeType | The type of resizing to apply.
ResizePresetType presetType = ResizePresetType.FACEBOOK; // ResizePresetType | The type of preset size to use for resizing.
ResizePresetSize presetSize = ResizePresetSize.FACEBOOK_POST; // ResizePresetSize | The preset size to use for resizing.
Integer width = 56; // Integer | The desired width of the resized files.
Integer height = 56; // Integer | The desired height of the resized files.
Integer percentage = 56; // Integer | The percentage to resize the files by.
Boolean useProportions = true; // Boolean | Indicates whether to maintain the aspect ratio when resizing.
ResizePageSize pageSize = ResizePageSize.A4; // ResizePageSize | The page size to use for the resized files.
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
 **resizeType** | [**ResizeType**](.md)| The type of resizing to apply. | [optional]
 **presetType** | [**ResizePresetType**](.md)| The type of preset size to use for resizing. | [optional]
 **presetSize** | [**ResizePresetSize**](.md)| The preset size to use for resizing. | [optional]
 **width** | **Integer**| The desired width of the resized files. | [optional]
 **height** | **Integer**| The desired height of the resized files. | [optional]
 **percentage** | **Integer**| The percentage to resize the files by. | [optional]
 **useProportions** | **Boolean**| Indicates whether to maintain the aspect ratio when resizing. | [optional]
 **pageSize** | [**ResizePageSize**](.md)| The page size to use for the resized files. | [optional]

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

Rotate document.

Rotates the provided files by a specified angle, with options for rotation type and page number.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
RotateAngle angle = RotateAngle.ON90; // RotateAngle | The angle by which to rotate the files.
RotateType rotateType = RotateType.A; // RotateType | The type of rotation to perform.
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
 **angle** | [**RotateAngle**](.md)| The angle by which to rotate the files. | [optional]
 **rotateType** | [**RotateType**](.md)| The type of rotation to perform. | [optional]
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

Search document text.

Searches the provided files for the specified query and makr found text with yellow background.

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

Make scanned pdf searchable.

Converts the provided files into a searchable PDF format for the specified language.

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
> FileResponse pdfWebapiSignaturePost(image, text, textColor, files, inputType, outputType, signatureType)

Add signature to document.

Adds a signature, text and image to the provided documents.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
String image = "image_example"; // String | 
String text = "text_example"; // String | 
String textColor = "textColor_example"; // String | 
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
SignatureType signatureType = SignatureType.TEXT; // SignatureType | The type of signature to add.
try {
    FileResponse result = apiInstance.pdfWebapiSignaturePost(image, text, textColor, files, inputType, outputType, signatureType);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiSignaturePost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **String**|  | [optional]
 **text** | **String**|  | [optional]
 **textColor** | **String**|  | [optional]
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]
 **signatureType** | [**SignatureType**](.md)| The type of signature to add. | [optional]

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

Split document.

Splits the provided documents based on the specified split type and page rage to spit.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
SplitDocType splitType = SplitDocType.ODDEVEN; // SplitDocType | The type of splitting to be performed.
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
 **splitType** | [**SplitDocType**](.md)| The type of splitting to be performed. | [optional]
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

Split image.

Splits the provided images into smaller parts based on the specified parameters.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
SplitImageType splitType = SplitImageType.HORIZONTAL; // SplitImageType | The type of splitting to be performed.
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
 **splitType** | [**SplitImageType**](.md)| The type of splitting to be performed. | [optional]
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

Processing status.

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

Unlock document.

Attempts to unlock a document with an password and associated files.

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

Verify document certificate.

Verifies the electronic signature of the provided files.

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
> FileResponse pdfWebapiWatermarkPost(files, inputType, outputType, isColored, isText, text, name, size, bold, italic, underlined, color, isBackground, rotation, transparency, layer, pageFrom, pageTo)

Add watermark to document.

Adds a watermark to the provided files.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String inputType = "inputType_example"; // String | The format of the input files.
String outputType = "outputType_example"; // String | The desired format for the output files.
Boolean isColored = true; // Boolean | Indicate is watermark will be in color or grayscale.
Boolean isText = true; // Boolean | Indicates whether the watermark is text.
String text = "text_example"; // String | The text of the watermark.
String name = "name_example"; // String | The name of the font for the text watermark.
Integer size = 56; // Integer | The size of the font for the text watermark.
Boolean bold = true; // Boolean | Indicates whether the text watermark is bold.
Boolean italic = true; // Boolean | Indicates whether the text watermark is italic.
Boolean underlined = true; // Boolean | Indicates whether the text watermark is underlined.
String color = "color_example"; // String | The color of the text or image watermark.
Boolean isBackground = true; // Boolean | Indicates whether the watermark is a background watermark.
Integer rotation = 56; // Integer | The rotation angle of the watermark.
Float transparency = 3.4F; // Float | The transparency of the watermark.
Boolean layer = true; // Boolean | Indicates whether the watermark is a layer.
Integer pageFrom = 56; // Integer | The starting page number for the watermark.
Integer pageTo = 56; // Integer | The ending page number for the watermark.
try {
    FileResponse result = apiInstance.pdfWebapiWatermarkPost(files, inputType, outputType, isColored, isText, text, name, size, bold, italic, underlined, color, isBackground, rotation, transparency, layer, pageFrom, pageTo);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiWatermarkPost");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**List&lt;File&gt;**](File.md)|  | [optional]
 **inputType** | **String**| The format of the input files. | [optional]
 **outputType** | **String**| The desired format for the output files. | [optional]
 **isColored** | **Boolean**| Indicate is watermark will be in color or grayscale. | [optional]
 **isText** | **Boolean**| Indicates whether the watermark is text. | [optional]
 **text** | **String**| The text of the watermark. | [optional]
 **name** | **String**| The name of the font for the text watermark. | [optional]
 **size** | **Integer**| The size of the font for the text watermark. | [optional]
 **bold** | **Boolean**| Indicates whether the text watermark is bold. | [optional]
 **italic** | **Boolean**| Indicates whether the text watermark is italic. | [optional]
 **underlined** | **Boolean**| Indicates whether the text watermark is underlined. | [optional]
 **color** | **String**| The color of the text or image watermark. | [optional]
 **isBackground** | **Boolean**| Indicates whether the watermark is a background watermark. | [optional]
 **rotation** | **Integer**| The rotation angle of the watermark. | [optional]
 **transparency** | **Float**| The transparency of the watermark. | [optional]
 **layer** | **Boolean**| Indicates whether the watermark is a layer. | [optional]
 **pageFrom** | **Integer**| The starting page number for the watermark. | [optional]
 **pageTo** | **Integer**| The ending page number for the watermark. | [optional]

### Return type

[**FileResponse**](FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

<a name="pdfWebapiWordcounterPost"></a>
# **pdfWebapiWordcounterPost**
> FileResponse pdfWebapiWordcounterPost(files, pageRange)

Count words and chars in document.

Counts the words in the provided files within the specified page range.

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.ApiApi;


ApiApi apiInstance = new ApiApi();
List<File> files = Arrays.asList(new File("/path/to/file")); // List<File> | 
String pageRange = "pageRange_example"; // String | The range of pages to count words in.
try {
    FileResponse result = apiInstance.pdfWebapiWordcounterPost(files, pageRange);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ApiApi#pdfWebapiWordcounterPost");
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

Convert XFA format to a another format.

Converts the provided documents from XFA format to a different format.

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

