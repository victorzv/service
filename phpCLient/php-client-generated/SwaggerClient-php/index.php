<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
// $files = array("files_example"); // string[] | 
// $v_alignment = "v_alignment_example"; // string | The vertical alignment of the page numbers.
// $h_alignment = "h_alignment_example"; // string | The horizontal alignment of the page numbers.
// $starting_number = 56; // int | The starting number for the page numbers.
// $s_number = 56; // int | The number of the first page to start numbering from.
// $f_number = 56; // int | The number of the last page to end numbering at.
// $margin = 56; // int | The margin around the page numbers.
// $font_size = 56; // int | The font size of the page numbers.
// $format = "format_example"; // string | The format of the page numbers.

// try {
//     $result = $apiInstance->pdfWebapiAddnumberPost($files, $v_alignment, $h_alignment, $starting_number, $s_number, $f_number, $margin, $font_size, $format);
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling ApiApi->pdfWebapiAddnumberPost: ', $e->getMessage(), PHP_EOL;
// }
$id = "id_example"; // string | The ID of the processing to check the status of.

try {
    $result = $apiInstance->pdfWebapiStatusIdPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiStatusIdPost: ', $e->getMessage(), PHP_EOL;
}