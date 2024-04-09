# Swagger\Client\ApiApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pdfWebapiAddnumberPost**](ApiApi.md#pdfwebapiaddnumberpost) | **POST** /pdf/webapi/addnumber | Adds page numbers to the provided documents with the specified alignment, starting number, and format.
[**pdfWebapiBinaryComparisonPost**](ApiApi.md#pdfwebapibinarycomparisonpost) | **POST** /pdf/webapi/BinaryComparison | Performs a binary comparison on the provided files.
[**pdfWebapiChatpdfPost**](ApiApi.md#pdfwebapichatpdfpost) | **POST** /pdf/webapi/chatpdf | Generates a PDF document based on the provided files and question.
[**pdfWebapiComparisonPost**](ApiApi.md#pdfwebapicomparisonpost) | **POST** /pdf/webapi/Comparison | Compare provided files and create document with marked changes.
[**pdfWebapiCompressPost**](ApiApi.md#pdfwebapicompresspost) | **POST** /pdf/webapi/compress | Compresses the provided files using the specified compression level.
[**pdfWebapiConvertPost**](ApiApi.md#pdfwebapiconvertpost) | **POST** /pdf/webapi/convert | Converts the provided files from one format to another, with options for XML conversion and font size adjustment.
[**pdfWebapiConvertWebpagePost**](ApiApi.md#pdfwebapiconvertwebpagepost) | **POST** /pdf/webapi/convert-webpage | Converts a web page to the specified output format.
[**pdfWebapiCropPost**](ApiApi.md#pdfwebapicroppost) | **POST** /pdf/webapi/crop | Crops the provided files to the specified dimensions.
[**pdfWebapiDownloadIdGet**](ApiApi.md#pdfwebapidownloadidget) | **GET** /pdf/webapi/download/{id} | Downloads a file.
[**pdfWebapiDownloadStreamIdPost**](ApiApi.md#pdfwebapidownloadstreamidpost) | **POST** /pdf/webapi/download-stream/{id} | Downloads a file as a stream.
[**pdfWebapiEsignPost**](ApiApi.md#pdfwebapiesignpost) | **POST** /pdf/webapi/esign | Electronically signs the provided files with the specified certificate and its password.
[**pdfWebapiExtractPost**](ApiApi.md#pdfwebapiextractpost) | **POST** /pdf/webapi/extract | Extracts tables from the provided documents and converts them to the specified output format.
[**pdfWebapiFormFillerPost**](ApiApi.md#pdfwebapiformfillerpost) | **POST** /pdf/webapi/form-filler | Fills a form with the provided files.
[**pdfWebapiGifPost**](ApiApi.md#pdfwebapigifpost) | **POST** /pdf/webapi/gif | Creates a GIF from the provided images.
[**pdfWebapiHashPost**](ApiApi.md#pdfwebapihashpost) | **POST** /pdf/webapi/hash | Hashes the provided files using the specified algorithm.
[**pdfWebapiLockPost**](ApiApi.md#pdfwebapilockpost) | **POST** /pdf/webapi/lock | Locks a document with the provided password and optional files.
[**pdfWebapiMergePost**](ApiApi.md#pdfwebapimergepost) | **POST** /pdf/webapi/merge | Merges the provided files into a single document or image, with options for orientation and page size.
[**pdfWebapiMetadataPost**](ApiApi.md#pdfwebapimetadatapost) | **POST** /pdf/webapi/metadata | Performs metadata operations on the provided files.
[**pdfWebapiMusicVideoPost**](ApiApi.md#pdfwebapimusicvideopost) | **POST** /pdf/webapi/music-video | Creates a music video from the provided files.
[**pdfWebapiOrganizePost**](ApiApi.md#pdfwebapiorganizepost) | **POST** /pdf/webapi/Organize | Organizes the provided documents by removing or moving specified pages.
[**pdfWebapiParsePost**](ApiApi.md#pdfwebapiparsepost) | **POST** /pdf/webapi/parse | Parses the provided files using a parser service.
[**pdfWebapiRedactPost**](ApiApi.md#pdfwebapiredactpost) | **POST** /pdf/webapi/redact | Redacts specified text from the provided documents, with options to search case-sensitively, target in text, comments, and metadata.
[**pdfWebapiRemoveIdPost**](ApiApi.md#pdfwebapiremoveidpost) | **POST** /pdf/webapi/remove/{id} | Removes all files from processing.
[**pdfWebapiRemovePost**](ApiApi.md#pdfwebapiremovepost) | **POST** /pdf/webapi/remove | Removes annotations from the provided documents.
[**pdfWebapiRemoveWatermarkPost**](ApiApi.md#pdfwebapiremovewatermarkpost) | **POST** /pdf/webapi/remove-watermark | Removes a watermark from the provided files.
[**pdfWebapiRemovepagesPost**](ApiApi.md#pdfwebapiremovepagespost) | **POST** /pdf/webapi/removepages | Removes specified pages from the provided files.
[**pdfWebapiRepairPost**](ApiApi.md#pdfwebapirepairpost) | **POST** /pdf/webapi/repair | Repairs the provided files.
[**pdfWebapiResizePost**](ApiApi.md#pdfwebapiresizepost) | **POST** /pdf/webapi/resize | Resizes the provided files to the specified dimensions or using a preset size.
[**pdfWebapiRotatePost**](ApiApi.md#pdfwebapirotatepost) | **POST** /pdf/webapi/rotate | Rotates the provided files by a specified angle, with options for rotation type and page number.
[**pdfWebapiSearchPost**](ApiApi.md#pdfwebapisearchpost) | **POST** /pdf/webapi/search | Searches the provided files for the specified query and makr found text with yellow background.
[**pdfWebapiSearchablePost**](ApiApi.md#pdfwebapisearchablepost) | **POST** /pdf/webapi/searchable | Converts the provided files into a searchable PDF format for the specified language.
[**pdfWebapiSignaturePost**](ApiApi.md#pdfwebapisignaturepost) | **POST** /pdf/webapi/Signature | Adds a signature to the provided files.
[**pdfWebapiSplitdocPost**](ApiApi.md#pdfwebapisplitdocpost) | **POST** /pdf/webapi/splitdoc | Splits the provided documents based on the specified split type and page rage to spit.
[**pdfWebapiSplitimagePost**](ApiApi.md#pdfwebapisplitimagepost) | **POST** /pdf/webapi/splitimage | Splits the provided images into smaller parts based on the specified parameters.
[**pdfWebapiStatusIdPost**](ApiApi.md#pdfwebapistatusidpost) | **POST** /pdf/webapi/status/{id} | Retrieves the status of a processing.
[**pdfWebapiUnlockPost**](ApiApi.md#pdfwebapiunlockpost) | **POST** /pdf/webapi/unlock | Attempts to unlock a document with an password and associated files.
[**pdfWebapiVerifyEsignPost**](ApiApi.md#pdfwebapiverifyesignpost) | **POST** /pdf/webapi/verify_esign | Verifies the electronic signature of the provided files.
[**pdfWebapiWatermarkPost**](ApiApi.md#pdfwebapiwatermarkpost) | **POST** /pdf/webapi/watermark | Adds a watermark to the provided files.
[**pdfWebapiWordCounterPost**](ApiApi.md#pdfwebapiwordcounterpost) | **POST** /pdf/webapi/WordCounter | Counts the words in the provided files within the specified page range.
[**pdfWebapiXfaconvertPost**](ApiApi.md#pdfwebapixfaconvertpost) | **POST** /pdf/webapi/xfaconvert | Converts the provided documents from XFA format to a different format.

# **pdfWebapiAddnumberPost**
> \Swagger\Client\Model\FileResponse pdfWebapiAddnumberPost($files, $v_alignment, $h_alignment, $starting_number, $s_number, $f_number, $margin, $font_size, $format)

Adds page numbers to the provided documents with the specified alignment, starting number, and format.

This endpoint is used to add page numbers to the provided files with the specified alignment, starting number, and format.  If the addition is started, the response will contain a success status and an optional message.  If the addition fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$v_alignment = "v_alignment_example"; // string | The vertical alignment of the page numbers.
$h_alignment = "h_alignment_example"; // string | The horizontal alignment of the page numbers.
$starting_number = 56; // int | The starting number for the page numbers.
$s_number = 56; // int | The number of the first page to start numbering from.
$f_number = 56; // int | The number of the last page to end numbering at.
$margin = 56; // int | The margin around the page numbers.
$font_size = 56; // int | The font size of the page numbers.
$format = "format_example"; // string | The format of the page numbers.

try {
    $result = $apiInstance->pdfWebapiAddnumberPost($files, $v_alignment, $h_alignment, $starting_number, $s_number, $f_number, $margin, $font_size, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiAddnumberPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **v_alignment** | **string**| The vertical alignment of the page numbers. | [optional]
 **h_alignment** | **string**| The horizontal alignment of the page numbers. | [optional]
 **starting_number** | **int**| The starting number for the page numbers. | [optional]
 **s_number** | **int**| The number of the first page to start numbering from. | [optional]
 **f_number** | **int**| The number of the last page to end numbering at. | [optional]
 **margin** | **int**| The margin around the page numbers. | [optional]
 **font_size** | **int**| The font size of the page numbers. | [optional]
 **format** | **string**| The format of the page numbers. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiBinaryComparisonPost**
> \Swagger\Client\Model\FileResponse pdfWebapiBinaryComparisonPost($files)

Performs a binary comparison on the provided files.

This endpoint is used to perform a binary comparison on the provided files.  If the comparison is started, the response will contain a success status and an optional message.  If the comparison fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->pdfWebapiBinaryComparisonPost($files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiBinaryComparisonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiChatpdfPost**
> \Swagger\Client\Model\FileResponse pdfWebapiChatpdfPost($files, $mode, $question)

Generates a PDF document based on the provided files and question.

This endpoint is used to generate a PDF document based on the provided files and question.  If the generation is started, the response will contain a success status and an optional message.  If the generation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$mode = 56; // int | The mode of operation for the PDF generation.
$question = "question_example"; // string | The question to be included in the PDF.

try {
    $result = $apiInstance->pdfWebapiChatpdfPost($files, $mode, $question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiChatpdfPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **mode** | **int**| The mode of operation for the PDF generation. | [optional]
 **question** | **string**| The question to be included in the PDF. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiComparisonPost**
> \Swagger\Client\Model\FileResponse pdfWebapiComparisonPost($files)

Compare provided files and create document with marked changes.

This endpoint is used to compare the provided files.  If the comparison is started, the response will contain a success status and an optional message.  If the comparison fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->pdfWebapiComparisonPost($files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiComparisonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiCompressPost**
> \Swagger\Client\Model\FileResponse pdfWebapiCompressPost($files, $compress_type)

Compresses the provided files using the specified compression level.

This endpoint is used to compress the provided files using the specified compression level.  If the compression is started, the response will contain a success status and an optional message.  If the compression fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$compress_type = 56; // int | The level of compression to use.

try {
    $result = $apiInstance->pdfWebapiCompressPost($files, $compress_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiCompressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **compress_type** | **int**| The level of compression to use. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiConvertPost**
> \Swagger\Client\Model\FileResponse pdfWebapiConvertPost($files, $input_type, $output_type, $xml_type, $xml_tag, $font_sise, $is_to_single, $separator)

Converts the provided files from one format to another, with options for XML conversion and font size adjustment.

This endpoint is used to convert the provided files from one format to another.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output files.
$xml_type = 56; // int | The type of XML conversion to perform, if applicable.
$xml_tag = "xml_tag_example"; // string | The XML tag to use for conversion, if applicable.
$font_sise = 56; // int | 
$is_to_single = true; // bool | Indicates whether the conversion should result in a single file, if applicable.
$separator = "separator_example"; // string | The separator to use when converting, if applicable.

try {
    $result = $apiInstance->pdfWebapiConvertPost($files, $input_type, $output_type, $xml_type, $xml_tag, $font_sise, $is_to_single, $separator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiConvertPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]
 **xml_type** | **int**| The type of XML conversion to perform, if applicable. | [optional]
 **xml_tag** | **string**| The XML tag to use for conversion, if applicable. | [optional]
 **font_sise** | **int**|  | [optional]
 **is_to_single** | **bool**| Indicates whether the conversion should result in a single file, if applicable. | [optional]
 **separator** | **string**| The separator to use when converting, if applicable. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiConvertWebpagePost**
> \Swagger\Client\Model\FileResponse pdfWebapiConvertWebpagePost($web_page, $output_type)

Converts a web page to the specified output format.

This endpoint is used to convert a web page to the specified output format.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_page = "web_page_example"; // string | 
$output_type = "output_type_example"; // string | The desired format for the output file.

try {
    $result = $apiInstance->pdfWebapiConvertWebpagePost($web_page, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiConvertWebpagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_page** | **string**|  | [optional]
 **output_type** | **string**| The desired format for the output file. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiCropPost**
> \Swagger\Client\Model\FileResponse pdfWebapiCropPost($files, $input_type, $top, $right, $bottom, $left, $output_type)

Crops the provided files to the specified dimensions.

This endpoint is used to crop the provided files to the specified dimensions.  If the cropping is started, the response will contain a success status and an optional message.  If the cropping fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$top = 56; // int | The number of pixels to crop from the top.
$right = 56; // int | The number of pixels to crop from the right.
$bottom = 56; // int | The number of pixels to crop from the bottom.
$left = 56; // int | The number of pixels to crop from the left.
$output_type = "output_type_example"; // string | The desired format for the output files.

try {
    $result = $apiInstance->pdfWebapiCropPost($files, $input_type, $top, $right, $bottom, $left, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiCropPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **top** | **int**| The number of pixels to crop from the top. | [optional]
 **right** | **int**| The number of pixels to crop from the right. | [optional]
 **bottom** | **int**| The number of pixels to crop from the bottom. | [optional]
 **left** | **int**| The number of pixels to crop from the left. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiDownloadIdGet**
> pdfWebapiDownloadIdGet($id, $file)

Downloads a file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the processing to download.
$file = "file_example"; // string | The name of the file to download.

try {
    $apiInstance->pdfWebapiDownloadIdGet($id, $file);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiDownloadIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the processing to download. |
 **file** | **string**| The name of the file to download. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiDownloadStreamIdPost**
> \Swagger\Client\Model\FileResponse pdfWebapiDownloadStreamIdPost($id, $file_name)

Downloads a file as a stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the processing to download.
$file_name = "file_name_example"; // string | The name of the file to download.

try {
    $result = $apiInstance->pdfWebapiDownloadStreamIdPost($id, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiDownloadStreamIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the processing to download. |
 **file_name** | **string**| The name of the file to download. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiEsignPost**
> \Swagger\Client\Model\FileResponse pdfWebapiEsignPost($files, $input_type, $passw)

Electronically signs the provided files with the specified certificate and its password.

This endpoint is used to electronically sign the provided files with the specified certificate and its password.  If the signing is started, the response will contain a success status and an optional message.  If the signing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$passw = "passw_example"; // string | The password to use for electronic signing.

try {
    $result = $apiInstance->pdfWebapiEsignPost($files, $input_type, $passw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiEsignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **passw** | **string**| The password to use for electronic signing. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiExtractPost**
> \Swagger\Client\Model\FileResponse pdfWebapiExtractPost($files, $input_type, $output_type)

Extracts tables from the provided documents and converts them to the specified output format.

This endpoint is used to extract tables from the provided files and convert them to the specified output format.  If the extraction is started, the response will contain a success status and an optional message.  If the extraction fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output files.

try {
    $result = $apiInstance->pdfWebapiExtractPost($files, $input_type, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiExtractPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiFormFillerPost**
> \Swagger\Client\Model\FileResponse pdfWebapiFormFillerPost($files, $file_name)

Fills a form with the provided files.

This endpoint is used to fill a form with the provided files.  If the filling is started, the response will contain a success status and an optional message.  If the filling fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$file_name = "file_name_example"; // string | The name of the file to fill the form with.

try {
    $result = $apiInstance->pdfWebapiFormFillerPost($files, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiFormFillerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **file_name** | **string**| The name of the file to fill the form with. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiGifPost**
> \Swagger\Client\Model\FileResponse pdfWebapiGifPost($keep_images_as_is, $resize_to_image, $streched, $width, $height, $frame_times)

Creates a GIF from the provided images.

This endpoint is used to create a GIF from the provided images.  If the creation is started, the response will contain a success status and an optional message.  If the creation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keep_images_as_is = true; // bool | Indicates whether the images should be kept as is.
$resize_to_image = 56; // int | The index of the image to resize the other images to.
$streched = true; // bool | 
$width = 56; // int | The width of the GIF.
$height = 56; // int | The height of the GIF.
$frame_times = "frame_times_example"; // string | The times for each frame in the GIF.

try {
    $result = $apiInstance->pdfWebapiGifPost($keep_images_as_is, $resize_to_image, $streched, $width, $height, $frame_times);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiGifPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keep_images_as_is** | **bool**| Indicates whether the images should be kept as is. | [optional]
 **resize_to_image** | **int**| The index of the image to resize the other images to. | [optional]
 **streched** | **bool**|  | [optional]
 **width** | **int**| The width of the GIF. | [optional]
 **height** | **int**| The height of the GIF. | [optional]
 **frame_times** | **string**| The times for each frame in the GIF. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiHashPost**
> \Swagger\Client\Model\FileResponse pdfWebapiHashPost($files, $input_type, $output_type, $alg)

Hashes the provided files using the specified algorithm.

This endpoint is used to hash the provided files using the specified algorithm.  If the hashing is started, the response will contain a success status and an optional message.  If the hashing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output files.
$alg = "alg_example"; // string | The hashing algorithm to use.

try {
    $result = $apiInstance->pdfWebapiHashPost($files, $input_type, $output_type, $alg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiHashPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]
 **alg** | **string**| The hashing algorithm to use. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiLockPost**
> \Swagger\Client\Model\FileResponse pdfWebapiLockPost($files, $passw)

Locks a document with the provided password and optional files.

This endpoint is used to lock a resource with an optional password and associated files.  If the lock is started, the response will contain a success status and processing id.  If the lock fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$passw = "passw_example"; // string | The password required to lock the resource.

try {
    $result = $apiInstance->pdfWebapiLockPost($files, $passw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiLockPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **passw** | **string**| The password required to lock the resource. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiMergePost**
> \Swagger\Client\Model\FileResponse pdfWebapiMergePost($files, $input_type, $output_type, $horizontal, $vertical, $page_size, $dc_is_landscape)

Merges the provided files into a single document or image, with options for orientation and page size.

This endpoint is used to merge the provided files into a single document or image.  If the merge is started, the response will contain a success status and an optional message.  If the merge fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output file.
$horizontal = 56; // int | The number of images to merge horizontally, if applicable.
$vertical = 56; // int | The number of images to merge vertically, if applicable.
$page_size = "page_size_example"; // string | The page size for the output file, if applicable.
$dc_is_landscape = true; // bool | Indicates whether the output file should be in landscape orientation.

try {
    $result = $apiInstance->pdfWebapiMergePost($files, $input_type, $output_type, $horizontal, $vertical, $page_size, $dc_is_landscape);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiMergePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output file. | [optional]
 **horizontal** | **int**| The number of images to merge horizontally, if applicable. | [optional]
 **vertical** | **int**| The number of images to merge vertically, if applicable. | [optional]
 **page_size** | **string**| The page size for the output file, if applicable. | [optional]
 **dc_is_landscape** | **bool**| Indicates whether the output file should be in landscape orientation. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiMetadataPost**
> \Swagger\Client\Model\FileResponse pdfWebapiMetadataPost($files, $opration, $folder, $name)

Performs metadata operations on the provided files.

This endpoint is used to perform metadata operations on the provided files.  If the operation is started, the response will contain a success status and an optional message.  If the operation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$opration = "opration_example"; // string | 
$folder = "folder_example"; // string | The folder where the files are located.
$name = "name_example"; // string | The name of the file to perform the operation on.

try {
    $result = $apiInstance->pdfWebapiMetadataPost($files, $opration, $folder, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiMetadataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **opration** | **string**|  | [optional]
 **folder** | **string**| The folder where the files are located. | [optional]
 **name** | **string**| The name of the file to perform the operation on. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiMusicVideoPost**
> \Swagger\Client\Model\FileResponse pdfWebapiMusicVideoPost($files, $interval, $output_type)

Creates a music video from the provided files.

This endpoint is used to create a music video from the provided files.  If the creation is started, the response will contain a success status and an optional message.  If the creation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$interval = 56; // int | The interval between frames in the music video.
$output_type = "output_type_example"; // string | The desired format for the output files.

try {
    $result = $apiInstance->pdfWebapiMusicVideoPost($files, $interval, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiMusicVideoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **interval** | **int**| The interval between frames in the music video. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiOrganizePost**
> \Swagger\Client\Model\FileResponse pdfWebapiOrganizePost($files, $input_type, $remove, $move)

Organizes the provided documents by removing or moving specified pages.

This endpoint is used to organize the provided documents by removing or moving specified pages.  If the organization is started, the response will contain a success status and an optional message.  If the organization fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$remove = "remove_example"; // string | The pages to remove from the document.
$move = "move_example"; // string | The pages to move within the document.

try {
    $result = $apiInstance->pdfWebapiOrganizePost($files, $input_type, $remove, $move);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiOrganizePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **remove** | **string**| The pages to remove from the document. | [optional]
 **move** | **string**| The pages to move within the document. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiParsePost**
> \Swagger\Client\Model\FileResponse pdfWebapiParsePost($files)

Parses the provided files using a parser service.

This endpoint is used to send files to a parser service for processing.  If the parsing is started, the response will contain a success status and an optional message.  If the parsing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->pdfWebapiParsePost($files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiParsePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiRedactPost**
> \Swagger\Client\Model\FileResponse pdfWebapiRedactPost($files, $search_query, $replace_text, $case_sensitive, $text, $comments, $metadata)

Redacts specified text from the provided documents, with options to search case-sensitively, target in text, comments, and metadata.

This endpoint is used to redact specified text from the provided files, with options to search case-sensitively and target different parts of the document such as text, comments, and metadata.  If the redaction is started, the response will contain a success status and an optional message.  If the redaction fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$search_query = "search_query_example"; // string | The text to search for and redact.
$replace_text = "replace_text_example"; // string | The text to replace the found text with.
$case_sensitive = true; // bool | Indicates whether the search should be case-sensitive.
$text = true; // bool | Indicates whether text should be redacted.
$comments = true; // bool | Indicates whether comments should be redacted.
$metadata = true; // bool | Indicates whether metadata should be redacted.

try {
    $result = $apiInstance->pdfWebapiRedactPost($files, $search_query, $replace_text, $case_sensitive, $text, $comments, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiRedactPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **search_query** | **string**| The text to search for and redact. | [optional]
 **replace_text** | **string**| The text to replace the found text with. | [optional]
 **case_sensitive** | **bool**| Indicates whether the search should be case-sensitive. | [optional]
 **text** | **bool**| Indicates whether text should be redacted. | [optional]
 **comments** | **bool**| Indicates whether comments should be redacted. | [optional]
 **metadata** | **bool**| Indicates whether metadata should be redacted. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiRemoveIdPost**
> \Swagger\Client\Model\FileResponse pdfWebapiRemoveIdPost($id)

Removes all files from processing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the processing to remove.

try {
    $result = $apiInstance->pdfWebapiRemoveIdPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiRemoveIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the processing to remove. |

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiRemovePost**
> \Swagger\Client\Model\FileResponse pdfWebapiRemovePost($files)

Removes annotations from the provided documents.

This endpoint is used to remove annotations from the provided files.  If the removal is started, the response will contain a success status and an optional message.  If the removal fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->pdfWebapiRemovePost($files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiRemoveWatermarkPost**
> \Swagger\Client\Model\FileResponse pdfWebapiRemoveWatermarkPost($watermark_text, $top, $left, $bottom, $right, $files, $is_all_pages, $watermark_type, $remove_range)

Removes a watermark from the provided files.

This endpoint is used to remove a watermark from the provided files.  If the removal is started, the response will contain a success status and an optional message.  If the removal fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$watermark_text = "watermark_text_example"; // string | 
$top = 56; // int | 
$left = 56; // int | 
$bottom = 56; // int | 
$right = 56; // int | 
$files = array("files_example"); // string[] | 
$is_all_pages = true; // bool | Indicates whether the watermark should be removed from all pages.
$watermark_type = "watermark_type_example"; // string | The type of watermark to remove.
$remove_range = "remove_range_example"; // string | The range of pages to remove the watermark from.

try {
    $result = $apiInstance->pdfWebapiRemoveWatermarkPost($watermark_text, $top, $left, $bottom, $right, $files, $is_all_pages, $watermark_type, $remove_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiRemoveWatermarkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **watermark_text** | **string**|  | [optional]
 **top** | **int**|  | [optional]
 **left** | **int**|  | [optional]
 **bottom** | **int**|  | [optional]
 **right** | **int**|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **is_all_pages** | **bool**| Indicates whether the watermark should be removed from all pages. | [optional]
 **watermark_type** | **string**| The type of watermark to remove. | [optional]
 **remove_range** | **string**| The range of pages to remove the watermark from. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiRemovepagesPost**
> \Swagger\Client\Model\FileResponse pdfWebapiRemovepagesPost($files, $remove_range)

Removes specified pages from the provided files.

This endpoint is used to remove specified pages from the provided files.  If the removal is started, the response will contain a success status and an optional message.  If the removal fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$remove_range = "remove_range_example"; // string | The range of pages to remove from the files.

try {
    $result = $apiInstance->pdfWebapiRemovepagesPost($files, $remove_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiRemovepagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **remove_range** | **string**| The range of pages to remove from the files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiRepairPost**
> \Swagger\Client\Model\FileResponse pdfWebapiRepairPost($files)

Repairs the provided files.

This endpoint is used to repair the provided files.  If the repair is started, the response will contain a success status and an optional message.  If the repair fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->pdfWebapiRepairPost($files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiRepairPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiResizePost**
> \Swagger\Client\Model\FileResponse pdfWebapiResizePost($files, $input_type, $output_type, $resize_type, $preset_type, $preset_size, $width, $height, $percentage, $use_proportions, $page_size)

Resizes the provided files to the specified dimensions or using a preset size.

This endpoint is used to resize the provided files to the specified dimensions or using a preset size.  If the resizing is started, the response will contain a success status and an optional message.  If the resizing fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output files.
$resize_type = 56; // int | The type of resizing to apply.
$preset_type = "preset_type_example"; // string | The type of preset size to use for resizing.
$preset_size = "preset_size_example"; // string | The preset size to use for resizing.
$width = 56; // int | The desired width of the resized files.
$height = 56; // int | The desired height of the resized files.
$percentage = 56; // int | The percentage to resize the files by.
$use_proportions = true; // bool | Indicates whether to maintain the aspect ratio when resizing.
$page_size = "page_size_example"; // string | The page size to use for the resized files.

try {
    $result = $apiInstance->pdfWebapiResizePost($files, $input_type, $output_type, $resize_type, $preset_type, $preset_size, $width, $height, $percentage, $use_proportions, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiResizePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]
 **resize_type** | **int**| The type of resizing to apply. | [optional]
 **preset_type** | **string**| The type of preset size to use for resizing. | [optional]
 **preset_size** | **string**| The preset size to use for resizing. | [optional]
 **width** | **int**| The desired width of the resized files. | [optional]
 **height** | **int**| The desired height of the resized files. | [optional]
 **percentage** | **int**| The percentage to resize the files by. | [optional]
 **use_proportions** | **bool**| Indicates whether to maintain the aspect ratio when resizing. | [optional]
 **page_size** | **string**| The page size to use for the resized files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiRotatePost**
> \Swagger\Client\Model\FileResponse pdfWebapiRotatePost($files, $angle, $rotate_type, $page_num)

Rotates the provided files by a specified angle, with options for rotation type and page number.

This endpoint is used to rotate the provided files by a specified angle.  If the rotation is started, the response will contain a success status and an optional message.  If the rotation fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$angle = 56; // int | The angle by which to rotate the files.
$rotate_type = "rotate_type_example"; // string | The type of rotation to perform.
$page_num = "page_num_example"; // string | The page number to rotate, if applicable.

try {
    $result = $apiInstance->pdfWebapiRotatePost($files, $angle, $rotate_type, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiRotatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **angle** | **int**| The angle by which to rotate the files. | [optional]
 **rotate_type** | **string**| The type of rotation to perform. | [optional]
 **page_num** | **string**| The page number to rotate, if applicable. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiSearchPost**
> \Swagger\Client\Model\FileResponse pdfWebapiSearchPost($files, $query)

Searches the provided files for the specified query and makr found text with yellow background.

This endpoint is used to search the provided files for the specified query.  If the search is started, the response will contain a success status and an optional message.  If the search fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$query = "query_example"; // string | The text to search for within the files.

try {
    $result = $apiInstance->pdfWebapiSearchPost($files, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **query** | **string**| The text to search for within the files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiSearchablePost**
> \Swagger\Client\Model\FileResponse pdfWebapiSearchablePost($files, $lang)

Converts the provided files into a searchable PDF format for the specified language.

This endpoint is used to convert the provided files into a searchable PDF format for the specified language.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$lang = "lang_example"; // string | The language of the files to be converted.

try {
    $result = $apiInstance->pdfWebapiSearchablePost($files, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiSearchablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **lang** | **string**| The language of the files to be converted. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiSignaturePost**
> \Swagger\Client\Model\FileResponse pdfWebapiSignaturePost($files, $input_type, $output_type, $signature_type)

Adds a signature to the provided files.

This endpoint is used to add a signature to the provided files.  If the addition is started, the response will contain a success status and an optional message.  If the addition fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output files.
$signature_type = "signature_type_example"; // string | The type of signature to add.

try {
    $result = $apiInstance->pdfWebapiSignaturePost($files, $input_type, $output_type, $signature_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiSignaturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]
 **signature_type** | **string**| The type of signature to add. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiSplitdocPost**
> \Swagger\Client\Model\FileResponse pdfWebapiSplitdocPost($files, $split_type, $pars)

Splits the provided documents based on the specified split type and page rage to spit.

This endpoint is used to split documents based on the specified split type and page rage.  If the splitting is started, the response will contain a success status and an optional message.  If the splitting fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$split_type = 56; // int | The type of splitting to be performed.
$pars = "pars_example"; // string | Optional page rage for the splitting operation.

try {
    $result = $apiInstance->pdfWebapiSplitdocPost($files, $split_type, $pars);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiSplitdocPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **split_type** | **int**| The type of splitting to be performed. | [optional]
 **pars** | **string**| Optional page rage for the splitting operation. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiSplitimagePost**
> \Swagger\Client\Model\FileResponse pdfWebapiSplitimagePost($files, $split_type, $vertical, $horizontal, $output_type)

Splits the provided images into smaller parts based on the specified parameters.

This endpoint is used to split images into smaller parts based on the specified parameters.  If the splitting is started, the response will contain a success status and an optional message.  If the splitting fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$split_type = 56; // int | The type of splitting to be performed.
$vertical = 56; // int | The number of vertical splits to create.
$horizontal = 56; // int | The number of horizontal splits to create.
$output_type = "output_type_example"; // string | The desired output format for the split images.

try {
    $result = $apiInstance->pdfWebapiSplitimagePost($files, $split_type, $vertical, $horizontal, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiSplitimagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **split_type** | **int**| The type of splitting to be performed. | [optional]
 **vertical** | **int**| The number of vertical splits to create. | [optional]
 **horizontal** | **int**| The number of horizontal splits to create. | [optional]
 **output_type** | **string**| The desired output format for the split images. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiStatusIdPost**
> \Swagger\Client\Model\FileResponse pdfWebapiStatusIdPost($id)

Retrieves the status of a processing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the processing to check the status of.

try {
    $result = $apiInstance->pdfWebapiStatusIdPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiStatusIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the processing to check the status of. |

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiUnlockPost**
> \Swagger\Client\Model\FileResponse pdfWebapiUnlockPost($files, $passw)

Attempts to unlock a document with an password and associated files.

This endpoint is used to unlock a resource that was previously locked with a password on associated files.  If the unlock is started, the response will contain a success status and an optional message.  If the unlock fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$passw = "passw_example"; // string | The password used in locked document.

try {
    $result = $apiInstance->pdfWebapiUnlockPost($files, $passw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiUnlockPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **passw** | **string**| The password used in locked document. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiVerifyEsignPost**
> \Swagger\Client\Model\FileResponse pdfWebapiVerifyEsignPost($files, $input_type)

Verifies the electronic signature of the provided files.

This endpoint is used to verify the electronic signature of the provided files.  If the verification is started, the response will contain a success status and an optional message.  If the verification fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.

try {
    $result = $apiInstance->pdfWebapiVerifyEsignPost($files, $input_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiVerifyEsignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiWatermarkPost**
> \Swagger\Client\Model\FileResponse pdfWebapiWatermarkPost($is_text, $text, $name2, $size, $bold, $italic, $underlined, $color, $content_type, $content_disposition, $headers, $length, $name, $file_name, $is_background, $rotation, $transparency, $layer, $page_from, $page_to, $files, $input_type, $output_type)

Adds a watermark to the provided files.

This endpoint is used to add a watermark to the provided files.  If the addition is started, the response will contain a success status and an optional message.  If the addition fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_text = true; // bool | 
$text = "text_example"; // string | 
$name2 = "name_example"; // string | 
$size = 56; // int | 
$bold = true; // bool | 
$italic = true; // bool | 
$underlined = true; // bool | 
$color = "color_example"; // string | 
$content_type = "content_type_example"; // string | 
$content_disposition = "content_disposition_example"; // string | 
$headers = array('key' => new \Swagger\Client\Model\string[]()); // map[string,string[]] | 
$length = 789; // int | 
$name = "name_example"; // string | 
$file_name = "file_name_example"; // string | 
$is_background = true; // bool | 
$rotation = 56; // int | 
$transparency = 3.4; // float | 
$layer = true; // bool | 
$page_from = 56; // int | 
$page_to = 56; // int | 
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output files.

try {
    $result = $apiInstance->pdfWebapiWatermarkPost($is_text, $text, $name2, $size, $bold, $italic, $underlined, $color, $content_type, $content_disposition, $headers, $length, $name, $file_name, $is_background, $rotation, $transparency, $layer, $page_from, $page_to, $files, $input_type, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiWatermarkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_text** | **bool**|  | [optional]
 **text** | **string**|  | [optional]
 **name2** | **string**|  | [optional]
 **size** | **int**|  | [optional]
 **bold** | **bool**|  | [optional]
 **italic** | **bool**|  | [optional]
 **underlined** | **bool**|  | [optional]
 **color** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **content_disposition** | **string**|  | [optional]
 **headers** | [**map[string,string[]]**](../Model/string[].md)|  | [optional]
 **length** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **file_name** | **string**|  | [optional]
 **is_background** | **bool**|  | [optional]
 **rotation** | **int**|  | [optional]
 **transparency** | **float**|  | [optional]
 **layer** | **bool**|  | [optional]
 **page_from** | **int**|  | [optional]
 **page_to** | **int**|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiWordCounterPost**
> \Swagger\Client\Model\FileResponse pdfWebapiWordCounterPost($files, $page_range)

Counts the words in the provided files within the specified page range.

This endpoint is used to count the words in the provided files within the specified page range.  If the counting is started, the response will contain a success status and the word count.  If the counting fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$page_range = "page_range_example"; // string | The range of pages to count words in.

try {
    $result = $apiInstance->pdfWebapiWordCounterPost($files, $page_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiWordCounterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **page_range** | **string**| The range of pages to count words in. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiXfaconvertPost**
> \Swagger\Client\Model\FileResponse pdfWebapiXfaconvertPost($files, $input_type)

Converts the provided documents from XFA format to a different format.

This endpoint is used to convert the provided files from XFA format to a different format.  If the conversion is started, the response will contain a success status and an optional message.  If the conversion fails, the response will contain an error status and a message indicating the reason for the failure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.

try {
    $result = $apiInstance->pdfWebapiXfaconvertPost($files, $input_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiXfaconvertPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

