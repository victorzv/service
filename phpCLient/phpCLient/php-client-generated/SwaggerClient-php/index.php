<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    new GuzzleHttp\Client()
);

$files = array("test.pdf"); // string[] |

$remove_range = "2"; // string | The range of pages to remove from the files.

try {
    $result = $apiInstance->pdfWebapiRemovepagesPost($files, $remove_range);
    print_r($result);
} catch (Exception $e) {
    echo "Exception:\r\n";
    echo $e->getTraceAsString()."\n\n";
}
