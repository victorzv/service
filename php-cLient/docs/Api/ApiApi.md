# Swagger\Client\ApiApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pdfWebapiAddnumberPost**](ApiApi.md#pdfwebapiaddnumberpost) | **POST** /pdf/webapi/addnumber | Add page numbers to document.
[**pdfWebapiChangeFontsPost**](ApiApi.md#pdfwebapichangefontspost) | **POST** /pdf/webapi/change-fonts | 
[**pdfWebapiComparisonPost**](ApiApi.md#pdfwebapicomparisonpost) | **POST** /pdf/webapi/comparison | Compare documents text.
[**pdfWebapiCompressPost**](ApiApi.md#pdfwebapicompresspost) | **POST** /pdf/webapi/compress | Compress document.
[**pdfWebapiConvertPost**](ApiApi.md#pdfwebapiconvertpost) | **POST** /pdf/webapi/convert | Convert document to another format.
[**pdfWebapiConvertWebpagePost**](ApiApi.md#pdfwebapiconvertwebpagepost) | **POST** /pdf/webapi/convert-webpage | Convert web page to document.
[**pdfWebapiCropPost**](ApiApi.md#pdfwebapicroppost) | **POST** /pdf/webapi/crop | Crop document.
[**pdfWebapiDownloadIdGet**](ApiApi.md#pdfwebapidownloadidget) | **GET** /pdf/webapi/download/{id} | File download.
[**pdfWebapiEsignPost**](ApiApi.md#pdfwebapiesignpost) | **POST** /pdf/webapi/esign | Sign document with certificate.
[**pdfWebapiExtractPost**](ApiApi.md#pdfwebapiextractpost) | **POST** /pdf/webapi/extract | Extract tables from document.
[**pdfWebapiFormFillerPost**](ApiApi.md#pdfwebapiformfillerpost) | **POST** /pdf/webapi/form-filler | Fill form.
[**pdfWebapiGifPost**](ApiApi.md#pdfwebapigifpost) | **POST** /pdf/webapi/gif | Make GIF.
[**pdfWebapiHashPost**](ApiApi.md#pdfwebapihashpost) | **POST** /pdf/webapi/hash | Calculate document hash.
[**pdfWebapiLockPost**](ApiApi.md#pdfwebapilockpost) | **POST** /pdf/webapi/lock | Lock document.
[**pdfWebapiMergePost**](ApiApi.md#pdfwebapimergepost) | **POST** /pdf/webapi/merge | Merge documents.
[**pdfWebapiMetadataPost**](ApiApi.md#pdfwebapimetadatapost) | **POST** /pdf/webapi/metadata | Read and change document metadata.
[**pdfWebapiOrganizePost**](ApiApi.md#pdfwebapiorganizepost) | **POST** /pdf/webapi/organize | Organize document pages.
[**pdfWebapiParsePost**](ApiApi.md#pdfwebapiparsepost) | **POST** /pdf/webapi/parse | Parse document.
[**pdfWebapiRedactPost**](ApiApi.md#pdfwebapiredactpost) | **POST** /pdf/webapi/redact | Redact document text.
[**pdfWebapiRemoveIdPost**](ApiApi.md#pdfwebapiremoveidpost) | **POST** /pdf/webapi/remove/{id} | Remove stored files.
[**pdfWebapiRemovePost**](ApiApi.md#pdfwebapiremovepost) | **POST** /pdf/webapi/remove | Remove document annotations.
[**pdfWebapiRemoveWatermarkPost**](ApiApi.md#pdfwebapiremovewatermarkpost) | **POST** /pdf/webapi/remove-watermark | Removes document watermark.
[**pdfWebapiRemovepagesPost**](ApiApi.md#pdfwebapiremovepagespost) | **POST** /pdf/webapi/removepages | Remove pages from document.
[**pdfWebapiRepairPost**](ApiApi.md#pdfwebapirepairpost) | **POST** /pdf/webapi/repair | Repair document.
[**pdfWebapiResizePost**](ApiApi.md#pdfwebapiresizepost) | **POST** /pdf/webapi/resize | Resize document.
[**pdfWebapiRotatePost**](ApiApi.md#pdfwebapirotatepost) | **POST** /pdf/webapi/rotate | Rotate document.
[**pdfWebapiSearchPost**](ApiApi.md#pdfwebapisearchpost) | **POST** /pdf/webapi/search | Search document text.
[**pdfWebapiSearchablePost**](ApiApi.md#pdfwebapisearchablepost) | **POST** /pdf/webapi/searchable | Make scanned pdf searchable.
[**pdfWebapiSignaturePost**](ApiApi.md#pdfwebapisignaturepost) | **POST** /pdf/webapi/signature | Add signature to document.
[**pdfWebapiSplitdocPost**](ApiApi.md#pdfwebapisplitdocpost) | **POST** /pdf/webapi/splitdoc | Split document.
[**pdfWebapiSplitimagePost**](ApiApi.md#pdfwebapisplitimagepost) | **POST** /pdf/webapi/splitimage | Split image.
[**pdfWebapiStatusIdPost**](ApiApi.md#pdfwebapistatusidpost) | **POST** /pdf/webapi/status/{id} | Processing status.
[**pdfWebapiUnlockPost**](ApiApi.md#pdfwebapiunlockpost) | **POST** /pdf/webapi/unlock | Unlock document.
[**pdfWebapiVerifyEsignPost**](ApiApi.md#pdfwebapiverifyesignpost) | **POST** /pdf/webapi/verify_esign | Verify document certificate.
[**pdfWebapiWatermarkPost**](ApiApi.md#pdfwebapiwatermarkpost) | **POST** /pdf/webapi/watermark | Add watermark to document.
[**pdfWebapiWordcounterPost**](ApiApi.md#pdfwebapiwordcounterpost) | **POST** /pdf/webapi/wordcounter | Count words and chars in document.
[**pdfWebapiXfaconvertPost**](ApiApi.md#pdfwebapixfaconvertpost) | **POST** /pdf/webapi/xfaconvert | Convert XFA format to a another format.

# **pdfWebapiAddnumberPost**
> \Swagger\Client\Model\FileResponse pdfWebapiAddnumberPost($files, $v_alignment, $h_alignment, $starting_number, $s_number, $f_number, $margin, $font_size, $format)

Add page numbers to document.

Adds page numbers to the provided documents with the specified alignment, starting number, and format.

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
$v_alignment = new \Swagger\Client\Model\PageNumberVerticalAlign(); // \Swagger\Client\Model\PageNumberVerticalAlign | The vertical alignment of the page numbers.
$h_alignment = new \Swagger\Client\Model\PageNumberHorizontalAlign(); // \Swagger\Client\Model\PageNumberHorizontalAlign | The horizontal alignment of the page numbers.
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
 **v_alignment** | [**\Swagger\Client\Model\PageNumberVerticalAlign**](../Model/.md)| The vertical alignment of the page numbers. | [optional]
 **h_alignment** | [**\Swagger\Client\Model\PageNumberHorizontalAlign**](../Model/.md)| The horizontal alignment of the page numbers. | [optional]
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

# **pdfWebapiChangeFontsPost**
> \Swagger\Client\Model\FileResponse pdfWebapiChangeFontsPost($font_replacements_json, $files)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$font_replacements_json = "font_replacements_json_example"; // string | 
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->pdfWebapiChangeFontsPost($font_replacements_json, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiChangeFontsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **font_replacements_json** | **string**|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]

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

Compare documents text.

Compare provided files and create document with marked changes.

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

Compress document.

Compresses the provided files using the specified compression level.

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
$compress_type = new \Swagger\Client\Model\CompressType(); // \Swagger\Client\Model\CompressType | The level of compression to use.

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
 **compress_type** | [**\Swagger\Client\Model\CompressType**](../Model/.md)| The level of compression to use. | [optional]

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

Convert document to another format.

Converts the provided files from one format to another.

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
$xml_type = new \Swagger\Client\Model\XmlType(); // \Swagger\Client\Model\XmlType | The type of XML conversion to perform, if applicable.
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
 **xml_type** | [**\Swagger\Client\Model\XmlType**](../Model/.md)| The type of XML conversion to perform, if applicable. | [optional]
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

Convert web page to document.

Converts a web page to the specified output format.

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

Crop document.

Crops the provided files to the specified dimensions.

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

File download.

Downloads processed file.

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

# **pdfWebapiEsignPost**
> \Swagger\Client\Model\FileResponse pdfWebapiEsignPost($passw, $files, $input_type)

Sign document with certificate.

Electronically signs the provided documents with the specified certificate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$passw = "passw_example"; // string | 
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.

try {
    $result = $apiInstance->pdfWebapiEsignPost($passw, $files, $input_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiEsignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **passw** | **string**|  | [optional]
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

# **pdfWebapiExtractPost**
> \Swagger\Client\Model\FileResponse pdfWebapiExtractPost($files, $input_type, $output_type)

Extract tables from document.

Extracts tables from the provided documents and converts them to the specified output format.

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

Fill form.

Fills a form with the provided files.

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
> \Swagger\Client\Model\FileResponse pdfWebapiGifPost($files, $keep_images_as_is, $resize_to_image, $streched, $width, $height, $frame_times)

Make GIF.

Creates a GIF from the provided images.

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
$keep_images_as_is = true; // bool | Indicates whether the images should be kept as is.
$resize_to_image = 56; // int | The index of the image to resize the other images to.
$streched = true; // bool | 
$width = 56; // int | The width of the GIF.
$height = 56; // int | The height of the GIF.
$frame_times = "frame_times_example"; // string | The times for each frame in the GIF.

try {
    $result = $apiInstance->pdfWebapiGifPost($files, $keep_images_as_is, $resize_to_image, $streched, $width, $height, $frame_times);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiGifPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
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

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiHashPost**
> \Swagger\Client\Model\FileResponse pdfWebapiHashPost($files, $input_type, $output_type, $alg)

Calculate document hash.

Calculate hashes of provided files using the specified algorithm.

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
$alg = new \Swagger\Client\Model\HashAlgorithm(); // \Swagger\Client\Model\HashAlgorithm | The hashing algorithm to use.

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
 **alg** | [**\Swagger\Client\Model\HashAlgorithm**](../Model/.md)| The hashing algorithm to use. | [optional]

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

Lock document.

Locks a document with the provided password and optional files.

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
> \Swagger\Client\Model\FileResponse pdfWebapiMergePost($files, $input_type, $output_type, $merge_type, $horizontal, $vertical, $page_size, $dc_is_landscape)

Merge documents.

Merges the provided files into a single document or image, with options for orientation and page size.

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
$merge_type = new \Swagger\Client\Model\MergeImageType(); // \Swagger\Client\Model\MergeImageType | Type of merger operation.
$horizontal = 56; // int | The number of images to merge horizontally, if applicable.
$vertical = 56; // int | The number of images to merge vertically, if applicable.
$page_size = new \Swagger\Client\Model\PageSize(); // \Swagger\Client\Model\PageSize | The page size for the output file, if applicable.
$dc_is_landscape = true; // bool | Indicates whether the output file should be in landscape orientation.

try {
    $result = $apiInstance->pdfWebapiMergePost($files, $input_type, $output_type, $merge_type, $horizontal, $vertical, $page_size, $dc_is_landscape);
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
 **merge_type** | [**\Swagger\Client\Model\MergeImageType**](../Model/.md)| Type of merger operation. | [optional]
 **horizontal** | **int**| The number of images to merge horizontally, if applicable. | [optional]
 **vertical** | **int**| The number of images to merge vertically, if applicable. | [optional]
 **page_size** | [**\Swagger\Client\Model\PageSize**](../Model/.md)| The page size for the output file, if applicable. | [optional]
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
> \Swagger\Client\Model\FileResponse pdfWebapiMetadataPost($files, $operation, $folder, $name)

Read and change document metadata.

Performs metadata operations on the provided files.

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
$operation = new \Swagger\Client\Model\MetadataOperation(); // \Swagger\Client\Model\MetadataOperation | The operation to perform on the metadata.
$folder = "folder_example"; // string | The folder where the files are located.
$name = "name_example"; // string | The name of the file to perform the operation on.

try {
    $result = $apiInstance->pdfWebapiMetadataPost($files, $operation, $folder, $name);
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
 **operation** | [**\Swagger\Client\Model\MetadataOperation**](../Model/.md)| The operation to perform on the metadata. | [optional]
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

# **pdfWebapiOrganizePost**
> \Swagger\Client\Model\FileResponse pdfWebapiOrganizePost($files, $input_type, $remove, $move)

Organize document pages.

Organizes the provided documents by removing or moving specified pages.

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

Parse document.

Parses the provided files using a parser service.

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

Redact document text.

Redacts specified text from the provided documents, with options to search case-sensitively, target in text, comments, and metadata.

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

Remove stored files.

Removes processed files from storage.

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

Remove document annotations.

Removes annotations from the provided documents.

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

Removes document watermark.

Removes a watermark from the document pages.

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
$watermark_type = new \Swagger\Client\Model\WatermarkType(); // \Swagger\Client\Model\WatermarkType | The type of watermark to remove.
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
 **watermark_type** | [**\Swagger\Client\Model\WatermarkType**](../Model/.md)| The type of watermark to remove. | [optional]
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

Remove pages from document.

Removes specified pages from the provided files.

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

Repair document.

Repairs the provided files.

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

Resize document.

Resizes the provided files to the specified dimensions or using a preset size.

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
$resize_type = new \Swagger\Client\Model\ResizeType(); // \Swagger\Client\Model\ResizeType | The type of resizing to apply.
$preset_type = new \Swagger\Client\Model\ResizePresetType(); // \Swagger\Client\Model\ResizePresetType | The type of preset size to use for resizing.
$preset_size = new \Swagger\Client\Model\ResizePresetSize(); // \Swagger\Client\Model\ResizePresetSize | The preset size to use for resizing.
$width = 56; // int | The desired width of the resized files.
$height = 56; // int | The desired height of the resized files.
$percentage = 56; // int | The percentage to resize the files by.
$use_proportions = true; // bool | Indicates whether to maintain the aspect ratio when resizing.
$page_size = new \Swagger\Client\Model\ResizePageSize(); // \Swagger\Client\Model\ResizePageSize | The page size to use for the resized files.

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
 **resize_type** | [**\Swagger\Client\Model\ResizeType**](../Model/.md)| The type of resizing to apply. | [optional]
 **preset_type** | [**\Swagger\Client\Model\ResizePresetType**](../Model/.md)| The type of preset size to use for resizing. | [optional]
 **preset_size** | [**\Swagger\Client\Model\ResizePresetSize**](../Model/.md)| The preset size to use for resizing. | [optional]
 **width** | **int**| The desired width of the resized files. | [optional]
 **height** | **int**| The desired height of the resized files. | [optional]
 **percentage** | **int**| The percentage to resize the files by. | [optional]
 **use_proportions** | **bool**| Indicates whether to maintain the aspect ratio when resizing. | [optional]
 **page_size** | [**\Swagger\Client\Model\ResizePageSize**](../Model/.md)| The page size to use for the resized files. | [optional]

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

Rotate document.

Rotates the provided files by a specified angle, with options for rotation type and page number.

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
$angle = new \Swagger\Client\Model\RotateAngle(); // \Swagger\Client\Model\RotateAngle | The angle by which to rotate the files.
$rotate_type = new \Swagger\Client\Model\RotateType(); // \Swagger\Client\Model\RotateType | The type of rotation to perform.
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
 **angle** | [**\Swagger\Client\Model\RotateAngle**](../Model/.md)| The angle by which to rotate the files. | [optional]
 **rotate_type** | [**\Swagger\Client\Model\RotateType**](../Model/.md)| The type of rotation to perform. | [optional]
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

Search document text.

Searches the provided files for the specified query and makr found text with yellow background.

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

Make scanned pdf searchable.

Converts the provided files into a searchable PDF format for the specified language.

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
> \Swagger\Client\Model\FileResponse pdfWebapiSignaturePost($image, $text, $text_color, $files, $input_type, $output_type, $signature_type)

Add signature to document.

Adds a signature, text and image to the provided documents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image = "image_example"; // string | 
$text = "text_example"; // string | 
$text_color = "text_color_example"; // string | 
$files = array("files_example"); // string[] | 
$input_type = "input_type_example"; // string | The format of the input files.
$output_type = "output_type_example"; // string | The desired format for the output files.
$signature_type = new \Swagger\Client\Model\SignatureType(); // \Swagger\Client\Model\SignatureType | The type of signature to add.

try {
    $result = $apiInstance->pdfWebapiSignaturePost($image, $text, $text_color, $files, $input_type, $output_type, $signature_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiSignaturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **string**|  | [optional]
 **text** | **string**|  | [optional]
 **text_color** | **string**|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]
 **signature_type** | [**\Swagger\Client\Model\SignatureType**](../Model/.md)| The type of signature to add. | [optional]

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

Split document.

Splits the provided documents based on the specified split type and page rage to spit.

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
$split_type = new \Swagger\Client\Model\SplitDocType(); // \Swagger\Client\Model\SplitDocType | The type of splitting to be performed.
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
 **split_type** | [**\Swagger\Client\Model\SplitDocType**](../Model/.md)| The type of splitting to be performed. | [optional]
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

Split image.

Splits the provided images into smaller parts based on the specified parameters.

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
$split_type = new \Swagger\Client\Model\SplitImageType(); // \Swagger\Client\Model\SplitImageType | The type of splitting to be performed.
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
 **split_type** | [**\Swagger\Client\Model\SplitImageType**](../Model/.md)| The type of splitting to be performed. | [optional]
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

Processing status.

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

Unlock document.

Attempts to unlock a document with an password and associated files.

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

Verify document certificate.

Verifies the electronic signature of the provided files.

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
> \Swagger\Client\Model\FileResponse pdfWebapiWatermarkPost($files, $input_type, $output_type, $is_colored, $is_text, $text, $name, $size, $bold, $italic, $underlined, $color, $is_background, $rotation, $transparency, $layer, $page_from, $page_to)

Add watermark to document.

Adds a watermark to the provided files.

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
$is_colored = true; // bool | Indicate is watermark will be in color or grayscale.
$is_text = true; // bool | Indicates whether the watermark is text.
$text = "text_example"; // string | The text of the watermark.
$name = "name_example"; // string | The name of the font for the text watermark.
$size = 56; // int | The size of the font for the text watermark.
$bold = true; // bool | Indicates whether the text watermark is bold.
$italic = true; // bool | Indicates whether the text watermark is italic.
$underlined = true; // bool | Indicates whether the text watermark is underlined.
$color = "color_example"; // string | The color of the text or image watermark.
$is_background = true; // bool | Indicates whether the watermark is a background watermark.
$rotation = 56; // int | The rotation angle of the watermark.
$transparency = 3.4; // float | The transparency of the watermark.
$layer = true; // bool | Indicates whether the watermark is a layer.
$page_from = 56; // int | The starting page number for the watermark.
$page_to = 56; // int | The ending page number for the watermark.

try {
    $result = $apiInstance->pdfWebapiWatermarkPost($files, $input_type, $output_type, $is_colored, $is_text, $text, $name, $size, $bold, $italic, $underlined, $color, $is_background, $rotation, $transparency, $layer, $page_from, $page_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiWatermarkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **input_type** | **string**| The format of the input files. | [optional]
 **output_type** | **string**| The desired format for the output files. | [optional]
 **is_colored** | **bool**| Indicate is watermark will be in color or grayscale. | [optional]
 **is_text** | **bool**| Indicates whether the watermark is text. | [optional]
 **text** | **string**| The text of the watermark. | [optional]
 **name** | **string**| The name of the font for the text watermark. | [optional]
 **size** | **int**| The size of the font for the text watermark. | [optional]
 **bold** | **bool**| Indicates whether the text watermark is bold. | [optional]
 **italic** | **bool**| Indicates whether the text watermark is italic. | [optional]
 **underlined** | **bool**| Indicates whether the text watermark is underlined. | [optional]
 **color** | **string**| The color of the text or image watermark. | [optional]
 **is_background** | **bool**| Indicates whether the watermark is a background watermark. | [optional]
 **rotation** | **int**| The rotation angle of the watermark. | [optional]
 **transparency** | **float**| The transparency of the watermark. | [optional]
 **layer** | **bool**| Indicates whether the watermark is a layer. | [optional]
 **page_from** | **int**| The starting page number for the watermark. | [optional]
 **page_to** | **int**| The ending page number for the watermark. | [optional]

### Return type

[**\Swagger\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pdfWebapiWordcounterPost**
> \Swagger\Client\Model\FileResponse pdfWebapiWordcounterPost($files, $page_range)

Count words and chars in document.

Counts the words in the provided files within the specified page range.

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
    $result = $apiInstance->pdfWebapiWordcounterPost($files, $page_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiWordcounterPost: ', $e->getMessage(), PHP_EOL;
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

Convert XFA format to a another format.

Converts the provided documents from XFA format to a different format.

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

