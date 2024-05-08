/**
 * Aspose.Pdf RestApi
 * Demo 1
 *
 * OpenAPI spec version: v1
 * Contact: Evgeny.Pirogov@aspose.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */
package io.swagger.client.models


/**
 * 
 * @param isText 
 * @param text 
 * @param name 
 * @param size 
 * @param bold 
 * @param italic 
 * @param underlined 
 * @param color 
 * @param contentType 
 * @param contentDisposition 
 * @param headers 
 * @param length 
 * @param name 
 * @param fileName 
 * @param isBackground 
 * @param rotation 
 * @param transparency 
 * @param layer 
 * @param pageFrom 
 * @param pageTo 
 * @param files 
 */
data class WebapiWatermarkBody (

    val isText: kotlin.Boolean? = null,
    val text: kotlin.String? = null,
    val name: kotlin.String? = null,
    val size: kotlin.Int? = null,
    val bold: kotlin.Boolean? = null,
    val italic: kotlin.Boolean? = null,
    val underlined: kotlin.Boolean? = null,
    val color: kotlin.String? = null,
    val contentType: kotlin.String? = null,
    val contentDisposition: kotlin.String? = null,
    val headers: kotlin.collections.Map<kotlin.String, kotlin.Array<kotlin.String>>? = null,
    val length: kotlin.Long? = null,
    val name: kotlin.String? = null,
    val fileName: kotlin.String? = null,
    val isBackground: kotlin.Boolean? = null,
    val rotation: kotlin.Int? = null,
    val transparency: kotlin.Float? = null,
    val layer: kotlin.Boolean? = null,
    val pageFrom: kotlin.Int? = null,
    val pageTo: kotlin.Int? = null,
    val files: kotlin.Array<kotlin.Array<kotlin.Byte>>? = null
) {
}