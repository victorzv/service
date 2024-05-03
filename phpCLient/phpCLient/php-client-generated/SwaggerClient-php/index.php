<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    new GuzzleHttp\Client()
);

// uncomment
//$files = array("test.pdf"); // string[] |
//$remove_range = "2"; // string | The range of pages to remove from the files.
//
//try {
//    $result = $apiInstance->pdfWebapiRemovepagesPost($files, $remove_range);
//    echo "OK! WORKS!";
//    print_r($result);
//} catch (Exception $e) {
//    echo "Exception:\n";
//    echo "Exception: " . $e->getMessage() . "\n";
////    print_r($e);
//    echo $e->getTraceAsString()."\n";
//}

$files = array("test.pdf"); // string[] |
$v_alignment = "1"; // string | The vertical alignment of the page numbers.
$h_alignment = "2"; // string | The horizontal alignment of the page numbers.
$starting_number = 1; // int | The starting number for the page numbers.
$s_number = 1; // int | The number of the first page to start numbering from.
$f_number = 1; // int | The number of the last page to end numbering at.
$margin = 10; // int | The margin around the page numbers.
$font_size = 10; // int | The font size of the page numbers.
$format = "pdf"; // string | The format of the page numbers.

try {
    $result = $apiInstance->pdfWebapiAddnumberPost($files, $v_alignment, $h_alignment, $starting_number, $s_number, $f_number, $margin, $font_size, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiAddnumberPost: ', $e->getMessage(), PHP_EOL;
    echo "\n";
    print_r($e);
}