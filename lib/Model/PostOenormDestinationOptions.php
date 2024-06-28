<?php
/**
 * PostOenormDestinationOptions
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
 * PostOenormDestinationOptions Class Doc Comment
 *
 * @category Class
 * @description Options for conversions to Oenorm
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostOenormDestinationOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostOenormDestinationOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_oenorm_type' => '\Dangl\AVACloud\Model\DestinationOenormType',
        'try_repair_project_structure' => 'bool',
        'skip_try_enforce_schema_compliant_xml_output' => 'bool',
        'remove_unprintable_characters_from_texts' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_oenorm_type' => null,
        'try_repair_project_structure' => null,
        'skip_try_enforce_schema_compliant_xml_output' => null,
        'remove_unprintable_characters_from_texts' => null
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
        'destination_oenorm_type' => 'destinationOenormType',
        'try_repair_project_structure' => 'tryRepairProjectStructure',
        'skip_try_enforce_schema_compliant_xml_output' => 'skipTryEnforceSchemaCompliantXmlOutput',
        'remove_unprintable_characters_from_texts' => 'removeUnprintableCharactersFromTexts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_oenorm_type' => 'setDestinationOenormType',
        'try_repair_project_structure' => 'setTryRepairProjectStructure',
        'skip_try_enforce_schema_compliant_xml_output' => 'setSkipTryEnforceSchemaCompliantXmlOutput',
        'remove_unprintable_characters_from_texts' => 'setRemoveUnprintableCharactersFromTexts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_oenorm_type' => 'getDestinationOenormType',
        'try_repair_project_structure' => 'getTryRepairProjectStructure',
        'skip_try_enforce_schema_compliant_xml_output' => 'getSkipTryEnforceSchemaCompliantXmlOutput',
        'remove_unprintable_characters_from_texts' => 'getRemoveUnprintableCharactersFromTexts'
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
        $this->container['destination_oenorm_type'] = isset($data['destination_oenorm_type']) ? $data['destination_oenorm_type'] : null;
        $this->container['try_repair_project_structure'] = isset($data['try_repair_project_structure']) ? $data['try_repair_project_structure'] : null;
        $this->container['skip_try_enforce_schema_compliant_xml_output'] = isset($data['skip_try_enforce_schema_compliant_xml_output']) ? $data['skip_try_enforce_schema_compliant_xml_output'] : null;
        $this->container['remove_unprintable_characters_from_texts'] = isset($data['remove_unprintable_characters_from_texts']) ? $data['remove_unprintable_characters_from_texts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['destination_oenorm_type'] === null) {
            $invalidProperties[] = "'destination_oenorm_type' can't be null";
        }
        if ($this->container['try_repair_project_structure'] === null) {
            $invalidProperties[] = "'try_repair_project_structure' can't be null";
        }
        if ($this->container['skip_try_enforce_schema_compliant_xml_output'] === null) {
            $invalidProperties[] = "'skip_try_enforce_schema_compliant_xml_output' can't be null";
        }
        if ($this->container['remove_unprintable_characters_from_texts'] === null) {
            $invalidProperties[] = "'remove_unprintable_characters_from_texts' can't be null";
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
     * Gets destination_oenorm_type
     *
     * @return \Dangl\AVACloud\Model\DestinationOenormType
     */
    public function getDestinationOenormType()
    {
        return $this->container['destination_oenorm_type'];
    }

    /**
     * Sets destination_oenorm_type
     *
     * @param \Dangl\AVACloud\Model\DestinationOenormType $destination_oenorm_type Defaults to Lv2015
     *
     * @return $this
     */
    public function setDestinationOenormType($destination_oenorm_type)
    {
        $this->container['destination_oenorm_type'] = $destination_oenorm_type;

        return $this;
    }

    /**
     * Gets try_repair_project_structure
     *
     * @return bool
     */
    public function getTryRepairProjectStructure()
    {
        return $this->container['try_repair_project_structure'];
    }

    /**
     * Sets try_repair_project_structure
     *
     * @param bool $try_repair_project_structure Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target
     *
     * @return $this
     */
    public function setTryRepairProjectStructure($try_repair_project_structure)
    {
        $this->container['try_repair_project_structure'] = $try_repair_project_structure;

        return $this;
    }

    /**
     * Gets skip_try_enforce_schema_compliant_xml_output
     *
     * @return bool
     */
    public function getSkipTryEnforceSchemaCompliantXmlOutput()
    {
        return $this->container['skip_try_enforce_schema_compliant_xml_output'];
    }

    /**
     * Sets skip_try_enforce_schema_compliant_xml_output
     *
     * @param bool $skip_try_enforce_schema_compliant_xml_output If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option.
     *
     * @return $this
     */
    public function setSkipTryEnforceSchemaCompliantXmlOutput($skip_try_enforce_schema_compliant_xml_output)
    {
        $this->container['skip_try_enforce_schema_compliant_xml_output'] = $skip_try_enforce_schema_compliant_xml_output;

        return $this;
    }

    /**
     * Gets remove_unprintable_characters_from_texts
     *
     * @return bool
     */
    public function getRemoveUnprintableCharactersFromTexts()
    {
        return $this->container['remove_unprintable_characters_from_texts'];
    }

    /**
     * Sets remove_unprintable_characters_from_texts
     *
     * @param bool $remove_unprintable_characters_from_texts If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true.
     *
     * @return $this
     */
    public function setRemoveUnprintableCharactersFromTexts($remove_unprintable_characters_from_texts)
    {
        $this->container['remove_unprintable_characters_from_texts'] = $remove_unprintable_characters_from_texts;

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


