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
import io.swagger.client.model.FileProcessingErrorCode;
import io.swagger.client.model.FileSafeResult;
import io.swagger.v3.oas.annotations.media.Schema;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import org.threeten.bp.OffsetDateTime;
/**
 * Response class to get or set any api call status
 */
@Schema(description = "Response class to get or set any api call status")
@javax.annotation.Generated(value = "io.swagger.codegen.v3.generators.java.JavaClientCodegen", date = "2024-05-08T13:33:40.370683405Z[GMT]")

public class FileResponse {
  @SerializedName("statusCode")
  private Integer statusCode = null;

  @SerializedName("status")
  private String status = null;

  @SerializedName("text")
  private String text = null;

  @SerializedName("locked")
  private Boolean locked = null;

  @SerializedName("updated")
  private OffsetDateTime updated = null;

  @SerializedName("sharedFiles")
  private List<FileSafeResult> sharedFiles = null;

  @SerializedName("files")
  private List<String> files = null;

  @SerializedName("fileProcessingErrorCode")
  private FileProcessingErrorCode fileProcessingErrorCode = null;

  @SerializedName("fileCount")
  private Integer fileCount = null;

  @SerializedName("fileName")
  private String fileName = null;

  @SerializedName("folderName")
  private String folderName = null;

  @SerializedName("resultData")
  private Object resultData = null;

  @SerializedName("appInstanceId")
  private String appInstanceId = null;

  public FileResponse statusCode(Integer statusCode) {
    this.statusCode = statusCode;
    return this;
  }

   /**
   * Get or set StatusCode
   * @return statusCode
  **/
  @Schema(description = "Get or set StatusCode")
  public Integer getStatusCode() {
    return statusCode;
  }

  public void setStatusCode(Integer statusCode) {
    this.statusCode = statusCode;
  }

  public FileResponse status(String status) {
    this.status = status;
    return this;
  }

   /**
   * Get or set Status
   * @return status
  **/
  @Schema(description = "Get or set Status")
  public String getStatus() {
    return status;
  }

  public void setStatus(String status) {
    this.status = status;
  }

  public FileResponse text(String text) {
    this.text = text;
    return this;
  }

   /**
   * Get or set Text
   * @return text
  **/
  @Schema(description = "Get or set Text")
  public String getText() {
    return text;
  }

  public void setText(String text) {
    this.text = text;
  }

  public FileResponse locked(Boolean locked) {
    this.locked = locked;
    return this;
  }

   /**
   * Get or set Document locked with password
   * @return locked
  **/
  @Schema(description = "Get or set Document locked with password")
  public Boolean isLocked() {
    return locked;
  }

  public void setLocked(Boolean locked) {
    this.locked = locked;
  }

  public FileResponse updated(OffsetDateTime updated) {
    this.updated = updated;
    return this;
  }

   /**
   * Last updated
   * @return updated
  **/
  @Schema(description = "Last updated")
  public OffsetDateTime getUpdated() {
    return updated;
  }

  public void setUpdated(OffsetDateTime updated) {
    this.updated = updated;
  }

  public FileResponse sharedFiles(List<FileSafeResult> sharedFiles) {
    this.sharedFiles = sharedFiles;
    return this;
  }

  public FileResponse addSharedFilesItem(FileSafeResult sharedFilesItem) {
    if (this.sharedFiles == null) {
      this.sharedFiles = new ArrayList<FileSafeResult>();
    }
    this.sharedFiles.add(sharedFilesItem);
    return this;
  }

   /**
   * Get or set Files
   * @return sharedFiles
  **/
  @Schema(description = "Get or set Files")
  public List<FileSafeResult> getSharedFiles() {
    return sharedFiles;
  }

  public void setSharedFiles(List<FileSafeResult> sharedFiles) {
    this.sharedFiles = sharedFiles;
  }

  public FileResponse files(List<String> files) {
    this.files = files;
    return this;
  }

  public FileResponse addFilesItem(String filesItem) {
    if (this.files == null) {
      this.files = new ArrayList<String>();
    }
    this.files.add(filesItem);
    return this;
  }

   /**
   * Get or set Files
   * @return files
  **/
  @Schema(description = "Get or set Files")
  public List<String> getFiles() {
    return files;
  }

  public void setFiles(List<String> files) {
    this.files = files;
  }

  public FileResponse fileProcessingErrorCode(FileProcessingErrorCode fileProcessingErrorCode) {
    this.fileProcessingErrorCode = fileProcessingErrorCode;
    return this;
  }

   /**
   * Get fileProcessingErrorCode
   * @return fileProcessingErrorCode
  **/
  @Schema(description = "")
  public FileProcessingErrorCode getFileProcessingErrorCode() {
    return fileProcessingErrorCode;
  }

  public void setFileProcessingErrorCode(FileProcessingErrorCode fileProcessingErrorCode) {
    this.fileProcessingErrorCode = fileProcessingErrorCode;
  }

   /**
   * Get count of files
   * @return fileCount
  **/
  @Schema(description = "Get count of files")
  public Integer getFileCount() {
    return fileCount;
  }

  public FileResponse fileName(String fileName) {
    this.fileName = fileName;
    return this;
  }

   /**
   * Get or set FileName
   * @return fileName
  **/
  @Schema(description = "Get or set FileName")
  public String getFileName() {
    return fileName;
  }

  public void setFileName(String fileName) {
    this.fileName = fileName;
  }

  public FileResponse folderName(String folderName) {
    this.folderName = folderName;
    return this;
  }

   /**
   * Get or set FolderName
   * @return folderName
  **/
  @Schema(description = "Get or set FolderName")
  public String getFolderName() {
    return folderName;
  }

  public void setFolderName(String folderName) {
    this.folderName = folderName;
  }

  public FileResponse resultData(Object resultData) {
    this.resultData = resultData;
    return this;
  }

   /**
   * Data displaying on file processing result page
   * @return resultData
  **/
  @Schema(description = "Data displaying on file processing result page")
  public Object getResultData() {
    return resultData;
  }

  public void setResultData(Object resultData) {
    this.resultData = resultData;
  }

  public FileResponse appInstanceId(String appInstanceId) {
    this.appInstanceId = appInstanceId;
    return this;
  }

   /**
   * Instance id where is processing located
   * @return appInstanceId
  **/
  @Schema(description = "Instance id where is processing located")
  public String getAppInstanceId() {
    return appInstanceId;
  }

  public void setAppInstanceId(String appInstanceId) {
    this.appInstanceId = appInstanceId;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    FileResponse fileResponse = (FileResponse) o;
    return Objects.equals(this.statusCode, fileResponse.statusCode) &&
        Objects.equals(this.status, fileResponse.status) &&
        Objects.equals(this.text, fileResponse.text) &&
        Objects.equals(this.locked, fileResponse.locked) &&
        Objects.equals(this.updated, fileResponse.updated) &&
        Objects.equals(this.sharedFiles, fileResponse.sharedFiles) &&
        Objects.equals(this.files, fileResponse.files) &&
        Objects.equals(this.fileProcessingErrorCode, fileResponse.fileProcessingErrorCode) &&
        Objects.equals(this.fileCount, fileResponse.fileCount) &&
        Objects.equals(this.fileName, fileResponse.fileName) &&
        Objects.equals(this.folderName, fileResponse.folderName) &&
        Objects.equals(this.resultData, fileResponse.resultData) &&
        Objects.equals(this.appInstanceId, fileResponse.appInstanceId);
  }

  @Override
  public int hashCode() {
    return Objects.hash(statusCode, status, text, locked, updated, sharedFiles, files, fileProcessingErrorCode, fileCount, fileName, folderName, resultData, appInstanceId);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class FileResponse {\n");
    
    sb.append("    statusCode: ").append(toIndentedString(statusCode)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    text: ").append(toIndentedString(text)).append("\n");
    sb.append("    locked: ").append(toIndentedString(locked)).append("\n");
    sb.append("    updated: ").append(toIndentedString(updated)).append("\n");
    sb.append("    sharedFiles: ").append(toIndentedString(sharedFiles)).append("\n");
    sb.append("    files: ").append(toIndentedString(files)).append("\n");
    sb.append("    fileProcessingErrorCode: ").append(toIndentedString(fileProcessingErrorCode)).append("\n");
    sb.append("    fileCount: ").append(toIndentedString(fileCount)).append("\n");
    sb.append("    fileName: ").append(toIndentedString(fileName)).append("\n");
    sb.append("    folderName: ").append(toIndentedString(folderName)).append("\n");
    sb.append("    resultData: ").append(toIndentedString(resultData)).append("\n");
    sb.append("    appInstanceId: ").append(toIndentedString(appInstanceId)).append("\n");
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
