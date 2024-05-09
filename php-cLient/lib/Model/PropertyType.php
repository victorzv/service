<?php
/**
 * PropertyType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Aspose.Pdf RestApi
 *
 * Aspose.Pdf RestApi provides a comprehensive set of endpoints for various PDF-related tasks, enabling efficient document processing and manipulation. Users can retrieve processing status, download files, manage file locks, parse documents, redact sensitive information, convert between formats, merge files, add watermarks, perform text searches, and much more. With endpoints for tasks like electronic signing, document comparison, and form filling, the API offers extensive functionality to cater to diverse PDF requirements.
 *
 * OpenAPI spec version: v1
 * Contact: Evgeny.Pirogov@aspose.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * PropertyType Class Doc Comment
 *
 * @category Class
 * @description Metadata property type
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyType
{
    /**
     * Possible values of this enum
     */
    const BOOLEAN = 'Boolean';
    const DATE_TIME = 'DateTime';
    const DOUBLE = 'Double';
    const NUMBER = 'Number';
    const STRING = 'String';
    const STRING_ARRAY = 'StringArray';
    const OBJECT_ARRAY = 'ObjectArray';
    const BYTE_ARRAY = 'ByteArray';
    const OTHER = 'Other';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOOLEAN
            self::DATE_TIME
            self::DOUBLE
            self::NUMBER
            self::STRING
            self::STRING_ARRAY
            self::OBJECT_ARRAY
            self::BYTE_ARRAY
            self::OTHER
        ];
    }
}
