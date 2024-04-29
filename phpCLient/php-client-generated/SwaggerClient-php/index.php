<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    new GuzzleHttp\Client()
);

$files = array("/home/tigra/Service/TestData/Test.pdf"); // string[] |
$compress_type = 56; // int | The level of compression to use.

try {
    $result = $apiInstance->pdfWebapiCompressPost($files, $compress_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiCompressPost: ', $e->getMessage(), PHP_EOL;
}
