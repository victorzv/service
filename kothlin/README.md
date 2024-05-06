# io.swagger.client - Kotlin client library for Aspose.Pdf RestApi

## Requires

* Kotlin 1.4.30
* Gradle 5.3

## Build

First, create the gradle wrapper script:

```
gradle wrapper
```

Then, run:

```
./gradlew check assemble
```

This runs all tests and packages the library.

## Features/Implementation Notes

* Supports JSON inputs/outputs, File inputs, and Form inputs.
* Supports collection formats for query parameters: csv, tsv, ssv, pipes.
* Some Kotlin and Java types are fully qualified to avoid conflicts with types defined in Swagger definitions.
* Implementation of ApiClient is intended to reduce method counts, specifically to benefit Android targets.

<a name="documentation-for-api-endpoints"></a>
## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiApi* | [**pdfWebapiAddnumberPost**](docs/ApiApi.md#pdfwebapiaddnumberpost) | **POST** /pdf/webapi/addnumber | Adds page numbers to the provided documents with the specified alignment, starting number, and format.
*ApiApi* | [**pdfWebapiBinaryComparisonPost**](docs/ApiApi.md#pdfwebapibinarycomparisonpost) | **POST** /pdf/webapi/BinaryComparison | Performs a binary comparison on the provided files.
*ApiApi* | [**pdfWebapiChatpdfPost**](docs/ApiApi.md#pdfwebapichatpdfpost) | **POST** /pdf/webapi/chatpdf | Generates a PDF document based on the provided files and question.
*ApiApi* | [**pdfWebapiComparisonPost**](docs/ApiApi.md#pdfwebapicomparisonpost) | **POST** /pdf/webapi/Comparison | Compare provided files and create document with marked changes.
*ApiApi* | [**pdfWebapiCompressPost**](docs/ApiApi.md#pdfwebapicompresspost) | **POST** /pdf/webapi/compress | Compresses the provided files using the specified compression level.
*ApiApi* | [**pdfWebapiConvertPost**](docs/ApiApi.md#pdfwebapiconvertpost) | **POST** /pdf/webapi/convert | Converts the provided files from one format to another, with options for XML conversion and font size adjustment.
*ApiApi* | [**pdfWebapiConvertWebpagePost**](docs/ApiApi.md#pdfwebapiconvertwebpagepost) | **POST** /pdf/webapi/convert-webpage | Converts a web page to the specified output format.
*ApiApi* | [**pdfWebapiCropPost**](docs/ApiApi.md#pdfwebapicroppost) | **POST** /pdf/webapi/crop | Crops the provided files to the specified dimensions.
*ApiApi* | [**pdfWebapiDownloadIdGet**](docs/ApiApi.md#pdfwebapidownloadidget) | **GET** /pdf/webapi/download/{id} | Downloads a file.
*ApiApi* | [**pdfWebapiDownloadStreamIdPost**](docs/ApiApi.md#pdfwebapidownloadstreamidpost) | **POST** /pdf/webapi/download-stream/{id} | Downloads a file as a stream.
*ApiApi* | [**pdfWebapiEsignPost**](docs/ApiApi.md#pdfwebapiesignpost) | **POST** /pdf/webapi/esign | Electronically signs the provided files with the specified certificate and its password.
*ApiApi* | [**pdfWebapiExtractPost**](docs/ApiApi.md#pdfwebapiextractpost) | **POST** /pdf/webapi/extract | Extracts tables from the provided documents and converts them to the specified output format.
*ApiApi* | [**pdfWebapiFormFillerPost**](docs/ApiApi.md#pdfwebapiformfillerpost) | **POST** /pdf/webapi/form-filler | Fills a form with the provided files.
*ApiApi* | [**pdfWebapiGifPost**](docs/ApiApi.md#pdfwebapigifpost) | **POST** /pdf/webapi/gif | Creates a GIF from the provided images.
*ApiApi* | [**pdfWebapiHashPost**](docs/ApiApi.md#pdfwebapihashpost) | **POST** /pdf/webapi/hash | Hashes the provided files using the specified algorithm.
*ApiApi* | [**pdfWebapiLockPost**](docs/ApiApi.md#pdfwebapilockpost) | **POST** /pdf/webapi/lock | Locks a document with the provided password and optional files.
*ApiApi* | [**pdfWebapiMergePost**](docs/ApiApi.md#pdfwebapimergepost) | **POST** /pdf/webapi/merge | Merges the provided files into a single document or image, with options for orientation and page size.
*ApiApi* | [**pdfWebapiMetadataPost**](docs/ApiApi.md#pdfwebapimetadatapost) | **POST** /pdf/webapi/metadata | Performs metadata operations on the provided files.
*ApiApi* | [**pdfWebapiMusicVideoPost**](docs/ApiApi.md#pdfwebapimusicvideopost) | **POST** /pdf/webapi/music-video | Creates a music video from the provided files.
*ApiApi* | [**pdfWebapiOrganizePost**](docs/ApiApi.md#pdfwebapiorganizepost) | **POST** /pdf/webapi/Organize | Organizes the provided documents by removing or moving specified pages.
*ApiApi* | [**pdfWebapiParsePost**](docs/ApiApi.md#pdfwebapiparsepost) | **POST** /pdf/webapi/parse | Parses the provided files using a parser service.
*ApiApi* | [**pdfWebapiRedactPost**](docs/ApiApi.md#pdfwebapiredactpost) | **POST** /pdf/webapi/redact | Redacts specified text from the provided documents, with options to search case-sensitively, target in text, comments, and metadata.
*ApiApi* | [**pdfWebapiRemoveIdPost**](docs/ApiApi.md#pdfwebapiremoveidpost) | **POST** /pdf/webapi/remove/{id} | Removes all files from processing.
*ApiApi* | [**pdfWebapiRemovePost**](docs/ApiApi.md#pdfwebapiremovepost) | **POST** /pdf/webapi/remove | Removes annotations from the provided documents.
*ApiApi* | [**pdfWebapiRemoveWatermarkPost**](docs/ApiApi.md#pdfwebapiremovewatermarkpost) | **POST** /pdf/webapi/remove-watermark | Removes a watermark from the provided files.
*ApiApi* | [**pdfWebapiRemovepagesPost**](docs/ApiApi.md#pdfwebapiremovepagespost) | **POST** /pdf/webapi/removepages | Removes specified pages from the provided files.
*ApiApi* | [**pdfWebapiRepairPost**](docs/ApiApi.md#pdfwebapirepairpost) | **POST** /pdf/webapi/repair | Repairs the provided files.
*ApiApi* | [**pdfWebapiResizePost**](docs/ApiApi.md#pdfwebapiresizepost) | **POST** /pdf/webapi/resize | Resizes the provided files to the specified dimensions or using a preset size.
*ApiApi* | [**pdfWebapiRotatePost**](docs/ApiApi.md#pdfwebapirotatepost) | **POST** /pdf/webapi/rotate | Rotates the provided files by a specified angle, with options for rotation type and page number.
*ApiApi* | [**pdfWebapiSearchPost**](docs/ApiApi.md#pdfwebapisearchpost) | **POST** /pdf/webapi/search | Searches the provided files for the specified query and makr found text with yellow background.
*ApiApi* | [**pdfWebapiSearchablePost**](docs/ApiApi.md#pdfwebapisearchablepost) | **POST** /pdf/webapi/searchable | Converts the provided files into a searchable PDF format for the specified language.
*ApiApi* | [**pdfWebapiSignaturePost**](docs/ApiApi.md#pdfwebapisignaturepost) | **POST** /pdf/webapi/Signature | Adds a signature to the provided files.
*ApiApi* | [**pdfWebapiSplitdocPost**](docs/ApiApi.md#pdfwebapisplitdocpost) | **POST** /pdf/webapi/splitdoc | Splits the provided documents based on the specified split type and page rage to spit.
*ApiApi* | [**pdfWebapiSplitimagePost**](docs/ApiApi.md#pdfwebapisplitimagepost) | **POST** /pdf/webapi/splitimage | Splits the provided images into smaller parts based on the specified parameters.
*ApiApi* | [**pdfWebapiStatusIdPost**](docs/ApiApi.md#pdfwebapistatusidpost) | **POST** /pdf/webapi/status/{id} | Retrieves the status of a processing.
*ApiApi* | [**pdfWebapiUnlockPost**](docs/ApiApi.md#pdfwebapiunlockpost) | **POST** /pdf/webapi/unlock | Attempts to unlock a document with an password and associated files.
*ApiApi* | [**pdfWebapiVerifyEsignPost**](docs/ApiApi.md#pdfwebapiverifyesignpost) | **POST** /pdf/webapi/verify_esign | Verifies the electronic signature of the provided files.
*ApiApi* | [**pdfWebapiWatermarkPost**](docs/ApiApi.md#pdfwebapiwatermarkpost) | **POST** /pdf/webapi/watermark | Adds a watermark to the provided files.
*ApiApi* | [**pdfWebapiWordCounterPost**](docs/ApiApi.md#pdfwebapiwordcounterpost) | **POST** /pdf/webapi/WordCounter | Counts the words in the provided files within the specified page range.
*ApiApi* | [**pdfWebapiXfaconvertPost**](docs/ApiApi.md#pdfwebapixfaconvertpost) | **POST** /pdf/webapi/xfaconvert | Converts the provided documents from XFA format to a different format.

<a name="documentation-for-models"></a>
## Documentation for Models

 - [io.swagger.client.models.DocProperty](docs/DocProperty.md)
 - [io.swagger.client.models.FileProcessingErrorCode](docs/FileProcessingErrorCode.md)
 - [io.swagger.client.models.FileResponse](docs/FileResponse.md)
 - [io.swagger.client.models.FileSafeResult](docs/FileSafeResult.md)
 - [io.swagger.client.models.PropertyType](docs/PropertyType.md)
 - [io.swagger.client.models.WebapiAddnumberBody](docs/WebapiAddnumberBody.md)
 - [io.swagger.client.models.WebapiBinaryComparisonBody](docs/WebapiBinaryComparisonBody.md)
 - [io.swagger.client.models.WebapiChatpdfBody](docs/WebapiChatpdfBody.md)
 - [io.swagger.client.models.WebapiComparisonBody](docs/WebapiComparisonBody.md)
 - [io.swagger.client.models.WebapiCompressBody](docs/WebapiCompressBody.md)
 - [io.swagger.client.models.WebapiConvertBody](docs/WebapiConvertBody.md)
 - [io.swagger.client.models.WebapiConvertwebpageBody](docs/WebapiConvertwebpageBody.md)
 - [io.swagger.client.models.WebapiCropBody](docs/WebapiCropBody.md)
 - [io.swagger.client.models.WebapiEsignBody](docs/WebapiEsignBody.md)
 - [io.swagger.client.models.WebapiExtractBody](docs/WebapiExtractBody.md)
 - [io.swagger.client.models.WebapiFormfillerBody](docs/WebapiFormfillerBody.md)
 - [io.swagger.client.models.WebapiHashBody](docs/WebapiHashBody.md)
 - [io.swagger.client.models.WebapiLockBody](docs/WebapiLockBody.md)
 - [io.swagger.client.models.WebapiMergeBody](docs/WebapiMergeBody.md)
 - [io.swagger.client.models.WebapiMetadataBody](docs/WebapiMetadataBody.md)
 - [io.swagger.client.models.WebapiMusicvideoBody](docs/WebapiMusicvideoBody.md)
 - [io.swagger.client.models.WebapiOrganizeBody](docs/WebapiOrganizeBody.md)
 - [io.swagger.client.models.WebapiParseBody](docs/WebapiParseBody.md)
 - [io.swagger.client.models.WebapiRedactBody](docs/WebapiRedactBody.md)
 - [io.swagger.client.models.WebapiRemoveBody](docs/WebapiRemoveBody.md)
 - [io.swagger.client.models.WebapiRemovepagesBody](docs/WebapiRemovepagesBody.md)
 - [io.swagger.client.models.WebapiRemovewatermarkBody](docs/WebapiRemovewatermarkBody.md)
 - [io.swagger.client.models.WebapiRepairBody](docs/WebapiRepairBody.md)
 - [io.swagger.client.models.WebapiResizeBody](docs/WebapiResizeBody.md)
 - [io.swagger.client.models.WebapiRotateBody](docs/WebapiRotateBody.md)
 - [io.swagger.client.models.WebapiSearchBody](docs/WebapiSearchBody.md)
 - [io.swagger.client.models.WebapiSearchableBody](docs/WebapiSearchableBody.md)
 - [io.swagger.client.models.WebapiSignatureBody](docs/WebapiSignatureBody.md)
 - [io.swagger.client.models.WebapiSplitdocBody](docs/WebapiSplitdocBody.md)
 - [io.swagger.client.models.WebapiSplitimageBody](docs/WebapiSplitimageBody.md)
 - [io.swagger.client.models.WebapiUnlockBody](docs/WebapiUnlockBody.md)
 - [io.swagger.client.models.WebapiVerifyEsignBody](docs/WebapiVerifyEsignBody.md)
 - [io.swagger.client.models.WebapiWatermarkBody](docs/WebapiWatermarkBody.md)
 - [io.swagger.client.models.WebapiWordCounterBody](docs/WebapiWordCounterBody.md)
 - [io.swagger.client.models.WebapiXfaconvertBody](docs/WebapiXfaconvertBody.md)

<a name="documentation-for-authorization"></a>
## Documentation for Authorization

All endpoints do not require authorization.
