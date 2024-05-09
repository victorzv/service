<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiApi(
    new GuzzleHttp\Client()
);


$files = array("test.pdf"); // string[] |
$remove_range = "2"; // string | The range of pages to remove from the files.

try {
    $result = $apiInstance->pdfWebapiRemovepagesPost($files, $remove_range);
    echo "OK! WORKS!";
    print_r($result);
} catch (Exception $e) {
    echo "Exception:\n";
    echo "Exception: " . $e->getMessage() . "\n";
//    print_r($e);
    echo $e->getTraceAsString()."\n";
}
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
//$files = array("/home/tigra/Service/TestData/test.jpg");
//$keep_images_as_is = "false"; // bool | Indicates whether the images should be kept as is.
//$resize_to_image = -1; // int | The index of the image to resize the other images to.
//$streched = "true"; // bool |
//$width = 100; // int | The width of the GIF.
//$height = 100; // int | The height of the GIF.
//$frame_times = "1000"; // string | The times for each frame in the GIF.
//
//try {
//    $result = $apiInstance->pdfWebapiGifPost($files, $keep_images_as_is, $resize_to_image, $streched, $width, $height, $frame_times);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiGifPost: ', $e->getMessage(), PHP_EOL;
//}
/////////////////////////////   OK   //////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$output_type = "pdf"; // string | The desired format for the output files.
//$alg = "md5"; // string | The hashing algorithm to use.
//
//try {
//    $result = $apiInstance->pdfWebapiHashPost($files, $input_type, $output_type, $alg);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiHashPost: ', $e->getMessage(), PHP_EOL;
//}
/////////////////////////// OK  ////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$passw = "123456"; // string | The password required to lock the resource.
//
//try {
//    $result = $apiInstance->pdfWebapiLockPost($files, $passw);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiLockPost: ', $e->getMessage(), PHP_EOL;
//}
//////////////////////////////////// OK ////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$output_type = "pdf"; // string | The desired format for the output file.
//$horizontal = 1; // int | The number of images to merge horizontally, if applicable.
//$vertical = 1; // int | The number of images to merge vertically, if applicable.
//$page_size = "A4"; // string | The page size for the output file, if applicable.
//$dc_is_landscape = "true"; // bool | Indicates whether the output file should be in landscape orientation.
//
//try {
//    $result = $apiInstance->pdfWebapiMergePost($files, $input_type, $output_type, $horizontal, $vertical, $page_size, $dc_is_landscape);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiMergePost: ', $e->getMessage(), PHP_EOL;
//}
/////////////////////////////////// OK //////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$operation = "get-properties"; // string |
//$folder = "folder"; // string | The folder where the files are located.
//$name = "test.pdf"; // string | The name of the file to perform the operation on.
//
//try {
//    $result = $apiInstance->pdfWebapiMetadataPost($files, $operation, $folder, $name);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiMetadataPost: ', $e->getMessage(), PHP_EOL;
//    print_r($e);
//}
/// ////////////////////  TODO: Not found /////////////////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$interval = 5; // int | The interval between frames in the music video.
//$output_type = "mp4"; // string | The desired format for the output files.
//
//try {
//    $result = $apiInstance->pdfWebapiMusicVideoPost($files, $interval, $output_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiMusicVideoPost: ', $e->getMessage(), PHP_EOL;
//}
/// ///////////////////////////////  OK ////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$remove = "1"; // string | The pages to remove from the document.
//$move = ""; // string | The pages to move within the document.
//
//try {
//    $result = $apiInstance->pdfWebapiOrganizePost($files, $input_type, $remove, $move);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiOrganizePost: ', $e->getMessage(), PHP_EOL;
//}
/// //////////////////////////  OK  ////////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//
//try {
//    $result = $apiInstance->pdfWebapiParsePost($files);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiParsePost: ', $e->getMessage(), PHP_EOL;
//}
/// //////////////////////////////////  OK  /////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$search_query = "query"; // string | The text to search for and redact.
//$replace_text = "replace"; // string | The text to replace the found text with.
//$case_sensitive = "true"; // bool | Indicates whether the search should be case-sensitive.
//$text = "true"; // bool | Indicates whether text should be redacted.
//$comments = "true"; // bool | Indicates whether comments should be redacted.
//$metadata = "true"; // bool | Indicates whether metadata should be redacted.
//
//try {
//    $result = $apiInstance->pdfWebapiRedactPost($files, $search_query, $replace_text, $case_sensitive, $text, $comments, $metadata);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiRedactPost: ', $e->getMessage(), PHP_EOL;
//}
/// //////////////////////////////////   OK  //////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//
//try {
//    $result = $apiInstance->pdfWebapiRemovePost($files);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiRemovePost: ', $e->getMessage(), PHP_EOL;
//}
/// ///////////////////////////////  OK  ////////////////////////////////////////////////////////////////////////////
//$watermark_text = "watermark text"; // string |
//$top = 1; // int |
//$left = 1; // int |
//$bottom = 1; // int |
//$right = 1; // int |
//$files = array("test.pdf"); // string[] |
//$is_all_pages = "true"; // bool | Indicates whether the watermark should be removed from all pages.
//$watermark_type = "text"; // string | The type of watermark to remove.
//$remove_range = "1-2"; // string | The range of pages to remove the watermark from.
//
//try {
//    $result = $apiInstance->pdfWebapiRemoveWatermarkPost($watermark_text, $top, $left, $bottom, $right, $files, $is_all_pages, $watermark_type, $remove_range);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiRemoveWatermarkPost: ', $e->getMessage(), PHP_EOL;
//}
/// /////////////////////////////  OK  /////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$remove_range = "2"; // string | The range of pages to remove from the files.
//
//try {
//    $result = $apiInstance->pdfWebapiRemovepagesPost($files, $remove_range);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiRemovepagesPost: ', $e->getMessage(), PHP_EOL;
//}
//////////////////////////////////// OK  /////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//
//try {
//    $result = $apiInstance->pdfWebapiRepairPost($files);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiRepairPost: ', $e->getMessage(), PHP_EOL;
//}
/////////////////////////////////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$output_type = "pdf"; // string | The desired format for the output files.
//$resize_type = 1; // int | The type of resizing to apply.
//$preset_type = "preset"; // string | The type of preset size to use for resizing.
//$preset_size = "1"; // string | The preset size to use for resizing.
//$width = 1; // int | The desired width of the resized files.
//$height = 1; // int | The desired height of the resized files.
//$percentage = 1; // int | The percentage to resize the files by.
//$use_proportions = "true"; // bool | Indicates whether to maintain the aspect ratio when resizing.
//$page_size = "A4"; // string | The page size to use for the resized files.
//
//try {
//    $result = $apiInstance->pdfWebapiResizePost($files, $input_type, $output_type, $resize_type, $preset_type, $preset_size, $width, $height, $percentage, $use_proportions, $page_size);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiResizePost: ', $e->getMessage(), PHP_EOL;
//}
/////////////////////////////////  OK  //////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$angle = 15; // int | The angle by which to rotate the files.
//$rotate_type = "test"; // string | The type of rotation to perform.
//$page_num = "1"; // string | The page number to rotate, if applicable.
//
//try {
//    $result = $apiInstance->pdfWebapiRotatePost($files, $angle, $rotate_type, $page_num);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiRotatePost: ', $e->getMessage(), PHP_EOL;
//}
////////////////////////////////  OK   //////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$query = "1"; // string | The text to search for within the files.
//
//try {
//    $result = $apiInstance->pdfWebapiSearchPost($files, $query);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiSearchPost: ', $e->getMessage(), PHP_EOL;
//}
///////////////////////////////  OK  //////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$lang = "eng"; // string | The language of the files to be converted.
//
//try {
//    $result = $apiInstance->pdfWebapiSearchablePost($files, $lang);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiSearchablePost: ', $e->getMessage(), PHP_EOL;
//}
///////////////////////// OK  ///////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$output_type = "pdf"; // string | The desired format for the output files.
//$signature_type = "drawing"; // string | The type of signature to add.
//
//try {
//    $result = $apiInstance->pdfWebapiSignaturePost($files, $input_type, $output_type, $signature_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiSignaturePost: ', $e->getMessage(), PHP_EOL;
//}
////////////////////// OK ///////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$split_type = 1; // int | The type of splitting to be performed.
//$pars = "1"; // string | Optional page rage for the splitting operation.
//
//try {
//    $result = $apiInstance->pdfWebapiSplitdocPost($files, $split_type, $pars);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiSplitdocPost: ', $e->getMessage(), PHP_EOL;
//}
////////////////////////  OK  //////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$split_type = 1; // int | The type of splitting to be performed.
//$vertical = 1; // int | The number of vertical splits to create.
//$horizontal = 1; // int | The number of horizontal splits to create.
//$output_type = "pdf"; // string | The desired output format for the split images.
//
//try {
//    $result = $apiInstance->pdfWebapiSplitimagePost($files, $split_type, $vertical, $horizontal, $output_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiSplitimagePost: ', $e->getMessage(), PHP_EOL;
//}
////////////////////////  OK   /////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$passw = "123456"; // string | The password used in locked document.
//
//try {
//    $result = $apiInstance->pdfWebapiUnlockPost($files, $passw);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiUnlockPost: ', $e->getMessage(), PHP_EOL;
//}
/////////////////////////////   OK   ///////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//
//try {
//    $result = $apiInstance->pdfWebapiVerifyEsignPost($files, $input_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiVerifyEsignPost: ', $e->getMessage(), PHP_EOL;
//}
///////////////////  TODO: fix System.Exception: Text and Image can't be empty! /////////////////////////////////////////////////////////////
//$is_text = "true"; // bool |
//$text = "watermark test"; // string |
//$name2 = "Arial"; // string |
//$size = 1; // int |
//$bold = "true"; // bool |
//$italic = "true"; // bool |
//$underlined = "true"; // bool |
//$color = "#ff0000"; // string |
//$content_type = "text"; // string |
//$content_disposition = "test"; // string |
//$headers = array('key' => 'text'); // map[string,string[]] |
//$length = 1; // int |
//$name = "Arial"; // string |
//$file_name = "test.pdf"; // string |
//$is_background = "true"; // bool |
//$rotation = 45; // int |
//$transparency = 3; // float |
//$layer = "true"; // bool |
//$page_from = 1; // int |
//$page_to = 1; // int |
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//$output_type = "pdf"; // string | The desired format for the output files.
//
//try {
//    $result = $apiInstance->pdfWebapiWatermarkPost($is_text, $text, $name2, $size, $bold, $italic, $underlined, $color, $content_type, $content_disposition, $headers, $length, $name, $file_name, $is_background, $rotation, $transparency, $layer, $page_from, $page_to, $files, $input_type, $output_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiWatermarkPost: ', $e->getMessage(), PHP_EOL;
//}
/////////////////////////////// OK ///////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$page_range = "1"; // string | The range of pages to count words in.
//
//try {
//    $result = $apiInstance->pdfWebapiWordCounterPost($files, $page_range);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiWordCounterPost: ', $e->getMessage(), PHP_EOL;
//}
//////////////////////////////// OK ///////////////////////////////////////////////////////////////////////////
//$files = array("test.pdf"); // string[] |
//$input_type = "pdf"; // string | The format of the input files.
//
//try {
//    $result = $apiInstance->pdfWebapiXfaconvertPost($files, $input_type);
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling ApiApi->pdfWebapiXfaconvertPost: ', $e->getMessage(), PHP_EOL;
//}

