<?php
/**
 * SupportingDocument
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.52.1
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.52.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.41
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl\AVACloud\Model;

use \ArrayAccess;
use \Dangl\AVACloud\ObjectSerializer;

/**
 * SupportingDocument Class Doc Comment
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupportingDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupportingDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_reference' => 'string',
        'description' => 'string',
        'external_document_url' => 'string',
        'document_base64' => 'string',
        'file_name' => 'string',
        'document_mime_type' => '\Dangl\AVACloud\Model\AttachmentMimeType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_reference' => null,
        'description' => null,
        'external_document_url' => null,
        'document_base64' => null,
        'file_name' => null,
        'document_mime_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'document_reference' => 'documentReference',
        'description' => 'description',
        'external_document_url' => 'externalDocumentUrl',
        'document_base64' => 'documentBase64',
        'file_name' => 'fileName',
        'document_mime_type' => 'documentMimeType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_reference' => 'setDocumentReference',
        'description' => 'setDescription',
        'external_document_url' => 'setExternalDocumentUrl',
        'document_base64' => 'setDocumentBase64',
        'file_name' => 'setFileName',
        'document_mime_type' => 'setDocumentMimeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_reference' => 'getDocumentReference',
        'description' => 'getDescription',
        'external_document_url' => 'getExternalDocumentUrl',
        'document_base64' => 'getDocumentBase64',
        'file_name' => 'getFileName',
        'document_mime_type' => 'getDocumentMimeType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['document_reference'] = isset($data['document_reference']) ? $data['document_reference'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['external_document_url'] = isset($data['external_document_url']) ? $data['external_document_url'] : null;
        $this->container['document_base64'] = isset($data['document_base64']) ? $data['document_base64'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['document_mime_type'] = isset($data['document_mime_type']) ? $data['document_mime_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_mime_type'] === null) {
            $invalidProperties[] = "'document_mime_type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets document_reference
     *
     * @return string
     */
    public function getDocumentReference()
    {
        return $this->container['document_reference'];
    }

    /**
     * Sets document_reference
     *
     * @param string $document_reference document_reference
     *
     * @return $this
     */
    public function setDocumentReference($document_reference)
    {
        $this->container['document_reference'] = $document_reference;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external_document_url
     *
     * @return string
     */
    public function getExternalDocumentUrl()
    {
        return $this->container['external_document_url'];
    }

    /**
     * Sets external_document_url
     *
     * @param string $external_document_url external_document_url
     *
     * @return $this
     */
    public function setExternalDocumentUrl($external_document_url)
    {
        $this->container['external_document_url'] = $external_document_url;

        return $this;
    }

    /**
     * Gets document_base64
     *
     * @return string
     */
    public function getDocumentBase64()
    {
        return $this->container['document_base64'];
    }

    /**
     * Sets document_base64
     *
     * @param string $document_base64 document_base64
     *
     * @return $this
     */
    public function setDocumentBase64($document_base64)
    {
        $this->container['document_base64'] = $document_base64;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets document_mime_type
     *
     * @return \Dangl\AVACloud\Model\AttachmentMimeType
     */
    public function getDocumentMimeType()
    {
        return $this->container['document_mime_type'];
    }

    /**
     * Sets document_mime_type
     *
     * @param \Dangl\AVACloud\Model\AttachmentMimeType $document_mime_type document_mime_type
     *
     * @return $this
     */
    public function setDocumentMimeType($document_mime_type)
    {
        $this->container['document_mime_type'] = $document_mime_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


