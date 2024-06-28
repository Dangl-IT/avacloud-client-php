<?php
/**
 * PositionHoldOutPropertiesDto
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
 * PositionHoldOutPropertiesDto Class Doc Comment
 *
 * @category Class
 * @description This class holds properties that describe retention types in position. Retention / hold out usually means that a service is provided and kept available for a specific amount of time, e.g. fences on a construction site
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionHoldOutPropertiesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PositionHoldOutPropertiesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'hold_out_type' => '\Dangl\AVACloud\Model\HoldOutTypeDto',
        'hold_out_duration' => 'float',
        'hold_out_duration_unit' => '\Dangl\AVACloud\Model\HoldOutDurationUnitDto',
        'base_position_references' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'hold_out_type' => null,
        'hold_out_duration' => 'decimal',
        'hold_out_duration_unit' => null,
        'base_position_references' => 'guid'
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
        'id' => 'id',
        'hold_out_type' => 'holdOutType',
        'hold_out_duration' => 'holdOutDuration',
        'hold_out_duration_unit' => 'holdOutDurationUnit',
        'base_position_references' => 'basePositionReferences'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'hold_out_type' => 'setHoldOutType',
        'hold_out_duration' => 'setHoldOutDuration',
        'hold_out_duration_unit' => 'setHoldOutDurationUnit',
        'base_position_references' => 'setBasePositionReferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'hold_out_type' => 'getHoldOutType',
        'hold_out_duration' => 'getHoldOutDuration',
        'hold_out_duration_unit' => 'getHoldOutDurationUnit',
        'base_position_references' => 'getBasePositionReferences'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hold_out_type'] = isset($data['hold_out_type']) ? $data['hold_out_type'] : null;
        $this->container['hold_out_duration'] = isset($data['hold_out_duration']) ? $data['hold_out_duration'] : null;
        $this->container['hold_out_duration_unit'] = isset($data['hold_out_duration_unit']) ? $data['hold_out_duration_unit'] : null;
        $this->container['base_position_references'] = isset($data['base_position_references']) ? $data['base_position_references'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['hold_out_type'] === null) {
            $invalidProperties[] = "'hold_out_type' can't be null";
        }
        if ($this->container['hold_out_duration'] === null) {
            $invalidProperties[] = "'hold_out_duration' can't be null";
        }
        if ($this->container['hold_out_duration_unit'] === null) {
            $invalidProperties[] = "'hold_out_duration_unit' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Elements GUID identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets hold_out_type
     *
     * @return \Dangl\AVACloud\Model\HoldOutTypeDto
     */
    public function getHoldOutType()
    {
        return $this->container['hold_out_type'];
    }

    /**
     * Sets hold_out_type
     *
     * @param \Dangl\AVACloud\Model\HoldOutTypeDto $hold_out_type The actual type
     *
     * @return $this
     */
    public function setHoldOutType($hold_out_type)
    {
        $this->container['hold_out_type'] = $hold_out_type;

        return $this;
    }

    /**
     * Gets hold_out_duration
     *
     * @return float
     */
    public function getHoldOutDuration()
    {
        return $this->container['hold_out_duration'];
    }

    /**
     * Sets hold_out_duration
     *
     * @param float $hold_out_duration The duration of the period
     *
     * @return $this
     */
    public function setHoldOutDuration($hold_out_duration)
    {
        $this->container['hold_out_duration'] = $hold_out_duration;

        return $this;
    }

    /**
     * Gets hold_out_duration_unit
     *
     * @return \Dangl\AVACloud\Model\HoldOutDurationUnitDto
     */
    public function getHoldOutDurationUnit()
    {
        return $this->container['hold_out_duration_unit'];
    }

    /**
     * Sets hold_out_duration_unit
     *
     * @param \Dangl\AVACloud\Model\HoldOutDurationUnitDto $hold_out_duration_unit The time unit of the period
     *
     * @return $this
     */
    public function setHoldOutDurationUnit($hold_out_duration_unit)
    {
        $this->container['hold_out_duration_unit'] = $hold_out_duration_unit;

        return $this;
    }

    /**
     * Gets base_position_references
     *
     * @return string[]
     */
    public function getBasePositionReferences()
    {
        return $this->container['base_position_references'];
    }

    /**
     * Sets base_position_references
     *
     * @param string[] $base_position_references References to base positions
     *
     * @return $this
     */
    public function setBasePositionReferences($base_position_references)
    {
        $this->container['base_position_references'] = $base_position_references;

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

