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
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$v_alignment = "1"; // string | The vertical alignment of the page numbers.
//$h_alignment = "2"; // string | The horizontal alignment of the page numbers.
//$starting_number = 1; // int | The starting number for the page numbers.
//$s_number = 1; // int | The number of the first page to start numbering from.
//$f_number = 1; // int | The number of the last page to end numbering at.
//$margin = 10; // int | The margin around the page numbers.
//$font_size = 10; // int | The font size of the page numbers.
//$format = "pdf"; // string | The format of the page numbers.
//
//try {
//    $result = $apiInstance->pdfWebapiAddnumberPost($files, $v_alignment, $h_alignment, $starting_number, $s_number, $f_number, $margin, $font_size, $format);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiAddnumberPost: ', $e->getMessage(), PHP_EOL;
//    echo "\n";
//    print_r($e);
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///
///
/// ////////////////// NOT FOUND ///////////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf");
//try {
//    $result = $apiInstance->pdfWebapiBinaryComparisonPost($files);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiBinaryComparisonPost: ', $e->getMessage(), PHP_EOL;
//    print_r($e);
//}
////////////////////// NOT FOUND ////////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$mode = 56; // int | The mode of operation for the PDF generation.
//$question = "test"; // string | The question to be included in the PDF.
//
//try {
//    $result = $apiInstance->pdfWebapiChatpdfPost($files, $mode, $question);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiChatpdfPost: ', $e->getMessage(), PHP_EOL;
//}
///////////////////////////     OK    ////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//
//try {
//    $result = $apiInstance->pdfWebapiComparisonPost($files);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiComparisonPost: ', $e->getMessage(), PHP_EOL;
//}
///////////////////////////        OK        /////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$compress_type = 56; // int | The level of compression to use.
//
//try {
//    $result = $apiInstance->pdfWebapiCompressPost($files, $compress_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiCompressPost: ', $e->getMessage(), PHP_EOL;
//}
//////////////////////////  OK - (is_to_single="true" (as string - works)   ////////////////////////////////////////////

//$files = array("/home/tigra/Service/TestData/test.7z"); // string[] |
//$input_type = "7z"; // string | The format of the input files.
//$output_type = "pdf"; // string | The desired format for the output files.
//$xml_type = 1; // int | The type of XML conversion to perform, if applicable.
//$xml_tag = "tag"; // string | The XML tag to use for conversion, if applicable.
//$font_sise = 10; // int |
//$is_to_single = "true"; // bool | Indicates whether the conversion should result in a single file, if applicable.
//$separator = "tab"; // string | The separator to use when converting, if applicable.
//
//try {
//    $result = $apiInstance->pdfWebapiConvertPost($files, $input_type, $output_type, $xml_type, $xml_tag, $font_sise, $is_to_single, $separator);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiConvertPost: ', $e->getMessage(), PHP_EOL;
//    print_r($e);
//}
////////////////////////////  OK   ///////////////////////////////////////////////////////////////////////////////////
//$web_page = "https://products.aspose.app/pdf/redaction"; // string |
//$output_type = "test.bmp"; // string | The desired format for the output file.
//
//try {
//    $result = $apiInstance->pdfWebapiConvertWebpagePost($web_page, $output_type);
//    print_r($result);
//} catch (Exception $e) {
//    print_r($e);
//}
/////////////////////  OK  /////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$top = 1; // int | The number of pixels to crop from the top.
//$right = 1; // int | The number of pixels to crop from the right.
//$bottom = 1; // int | The number of pixels to crop from the bottom.
//$left = 1; // int | The number of pixels to crop from the left.
//$output_type = "pdf"; // string | The desired format for the output files.
//
//try {
//    $result = $apiInstance->pdfWebapiCropPost($files, $input_type, $top, $right, $bottom, $left, $output_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiCropPost: ', $e->getMessage(), PHP_EOL;
//}
////////////// 500 internal server response   //////////////////////////////////////////////////////////////////////////
//$id = "1"; // string | The id of the processing to download.
//$file = "test.pdf"; // string | The name of the file to download.
//
//try {
//    $apiInstance->pdfWebapiDownloadIdGet($id, $file);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiDownloadIdGet: ', $e->getMessage(), PHP_EOL;
//}
//////////////////  TODO: fix
//$files = array("/home/tigra/Service/TestData/test.pfx"); // string[] |
//$input_type = "pfx"; // string | The format of the input files.
//$passw = "123456"; // string | The password to use for electronic signing.
//
//try {
//    $result = $apiInstance->pdfWebapiEsignPost($files, $input_type, $passw);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiEsignPost: ', $e->getMessage(), PHP_EOL;
//}
//////////////////// OK //////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$output_type = "pdf"; // string | The desired format for the output files.
//
//try {
//    $result = $apiInstance->pdfWebapiExtractPost($files, $input_type, $output_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiExtractPost: ', $e->getMessage(), PHP_EOL;
//}
////////////////////// OK  /////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$file_name = "test.pdf"; // string | The name of the file to fill the form with.
//
//try {
//    $result = $apiInstance->pdfWebapiFormFillerPost($files, $file_name);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiFormFillerPost: ', $e->getMessage(), PHP_EOL;
//}
//////////////////////////// OK  //////////////////////////////////////////
$files = array("/home/tigra/Service/TestData/test.jpg");
$keep_images_as_is = "false"; // bool | Indicates whether the images should be kept as is.
$resize_to_image = -1; // int | The index of the image to resize the other images to.
$streched = "true"; // bool |
$width = 100; // int | The width of the GIF.
$height = 100; // int | The height of the GIF.
$frame_times = "1000"; // string | The times for each frame in the GIF.

try {
    $result = $apiInstance->pdfWebapiGifPost($files, $keep_images_as_is, $resize_to_image, $streched, $width, $height, $frame_times);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->pdfWebapiGifPost: ', $e->getMessage(), PHP_EOL;
}
/////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
