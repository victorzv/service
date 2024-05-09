/*
 * Aspose.Pdf RestApi
 * Aspose.Pdf RestApi provides a comprehensive set of endpoints for various PDF-related tasks, enabling efficient document processing and manipulation. Users can retrieve processing status, download files, manage file locks, parse documents, redact sensitive information, convert between formats, merge files, add watermarks, perform text searches, and much more. With endpoints for tasks like electronic signing, document comparison, and form filling, the API offers extensive functionality to cater to diverse PDF requirements.
 *
 * OpenAPI spec version: v1
 * Contact: Evgeny.Pirogov@aspose.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

package io.swagger.client.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.client.model.PropertyType;
import io.swagger.v3.oas.annotations.media.Schema;
import java.io.IOException;
/**
 * Represents a document property.
 */
@Schema(description = "Represents a document property.")
@javax.annotation.Generated(value = "io.swagger.codegen.v3.generators.java.JavaClientCodegen", date = "2024-05-08T13:33:40.370683405Z[GMT]")

public class DocProperty {
  @SerializedName("key")
  private String key = null;

  @SerializedName("name")
  private String name = null;

  @SerializedName("value")
  private Object value = null;

  @SerializedName("type")
  private PropertyType type = null;

  @SerializedName("readOnly")
  private Boolean readOnly = null;

  public DocProperty key(String key) {
    this.key = key;
    return this;
  }

   /**
   * Gets or sets the key of the property.
   * @return key
  **/
  @Schema(description = "Gets or sets the key of the property.")
  public String getKey() {
    return key;
  }

  public void setKey(String key) {
    this.key = key;
  }

  public DocProperty name(String name) {
    this.name = name;
    return this;
  }

   /**
   * Gets or sets the name of the property.
   * @return name
  **/
  @Schema(description = "Gets or sets the name of the property.")
  public String getName() {
    return name;
  }

  public void setName(String name) {
    this.name = name;
  }

  public DocProperty value(Object value) {
    this.value = value;
    return this;
  }

   /**
   * Gets or sets the value of the property.
   * @return value
  **/
  @Schema(description = "Gets or sets the value of the property.")
  public Object getValue() {
    return value;
  }

  public void setValue(Object value) {
    this.value = value;
  }

  public DocProperty type(PropertyType type) {
    this.type = type;
    return this;
  }

   /**
   * Get type
   * @return type
  **/
  @Schema(description = "")
  public PropertyType getType() {
    return type;
  }

  public void setType(PropertyType type) {
    this.type = type;
  }

  public DocProperty readOnly(Boolean readOnly) {
    this.readOnly = readOnly;
    return this;
  }

   /**
   * Gets or sets a value indicating whether the property is read-only.
   * @return readOnly
  **/
  @Schema(description = "Gets or sets a value indicating whether the property is read-only.")
  public Boolean isReadOnly() {
    return readOnly;
  }

  public void setReadOnly(Boolean readOnly) {
    this.readOnly = readOnly;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    DocProperty docProperty = (DocProperty) o;
    return Objects.equals(this.key, docProperty.key) &&
        Objects.equals(this.name, docProperty.name) &&
        Objects.equals(this.value, docProperty.value) &&
        Objects.equals(this.type, docProperty.type) &&
        Objects.equals(this.readOnly, docProperty.readOnly);
  }

  @Override
  public int hashCode() {
    return Objects.hash(key, name, value, type, readOnly);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class DocProperty {\n");
    
    sb.append("    key: ").append(toIndentedString(key)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    value: ").append(toIndentedString(value)).append("\n");
    sb.append("    type: ").append(toIndentedString(type)).append("\n");
    sb.append("    readOnly: ").append(toIndentedString(readOnly)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}