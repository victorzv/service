/*
 * Aspose.Pdf RestApi
 *
 * Demo 1
 *
 * OpenAPI spec version: v1
 * Contact: Evgeny.Pirogov@aspose.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */
using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.ComponentModel.DataAnnotations;
using System.Runtime.Serialization;
using Newtonsoft.Json;

namespace IO.Swagger.Models
{
    /// <summary>
    /// 
    /// </summary>
    [DataContract]
    public partial class WebapiXfaconvertBody : IEquatable<WebapiXfaconvertBody>
    { 
        /// <summary>
        /// Gets or Sets Files
        /// </summary>

        [DataMember(Name="files")]
        public List<byte[]> Files { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class WebapiXfaconvertBody {\n");
            sb.Append("  Files: ").Append(Files).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="obj">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object obj)
        {
            if (ReferenceEquals(null, obj)) return false;
            if (ReferenceEquals(this, obj)) return true;
            return obj.GetType() == GetType() && Equals((WebapiXfaconvertBody)obj);
        }

        /// <summary>
        /// Returns true if WebapiXfaconvertBody instances are equal
        /// </summary>
        /// <param name="other">Instance of WebapiXfaconvertBody to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(WebapiXfaconvertBody other)
        {
            if (ReferenceEquals(null, other)) return false;
            if (ReferenceEquals(this, other)) return true;

            return 
                (
                    Files == other.Files ||
                    Files != null &&
                    Files.SequenceEqual(other.Files)
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                var hashCode = 41;
                // Suitable nullity checks etc, of course :)
                    if (Files != null)
                    hashCode = hashCode * 59 + Files.GetHashCode();
                return hashCode;
            }
        }

        #region Operators
        #pragma warning disable 1591

        public static bool operator ==(WebapiXfaconvertBody left, WebapiXfaconvertBody right)
        {
            return Equals(left, right);
        }

        public static bool operator !=(WebapiXfaconvertBody left, WebapiXfaconvertBody right)
        {
            return !Equals(left, right);
        }

        #pragma warning restore 1591
        #endregion Operators
    }
}
