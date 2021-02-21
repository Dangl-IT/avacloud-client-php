<?php
/**
 * ProductDataDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.17.3
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.17.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
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
 * ProductDataDto Class Doc Comment
 *
 * @category Class
 * @description This class represents data about products and their vendor
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductDataDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductDataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'vendor' => '\Dangl\AVACloud\Model\PartyInformationDto',
        'articles' => '\Dangl\AVACloud\Model\ArticleDataDto[]',
        'short_text' => 'string',
        'long_text' => 'string',
        'html_long_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'vendor' => null,
        'articles' => null,
        'short_text' => null,
        'long_text' => null,
        'html_long_text' => null
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
        'vendor' => 'vendor',
        'articles' => 'articles',
        'short_text' => 'shortText',
        'long_text' => 'longText',
        'html_long_text' => 'htmlLongText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'vendor' => 'setVendor',
        'articles' => 'setArticles',
        'short_text' => 'setShortText',
        'long_text' => 'setLongText',
        'html_long_text' => 'setHtmlLongText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'vendor' => 'getVendor',
        'articles' => 'getArticles',
        'short_text' => 'getShortText',
        'long_text' => 'getLongText',
        'html_long_text' => 'getHtmlLongText'
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
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['articles'] = isset($data['articles']) ? $data['articles'] : null;
        $this->container['short_text'] = isset($data['short_text']) ? $data['short_text'] : null;
        $this->container['long_text'] = isset($data['long_text']) ? $data['long_text'] : null;
        $this->container['html_long_text'] = isset($data['html_long_text']) ? $data['html_long_text'] : null;
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
     * Gets vendor
     *
     * @return \Dangl\AVACloud\Model\PartyInformationDto
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param \Dangl\AVACloud\Model\PartyInformationDto $vendor This PartyInformation is used to describe details about the vendor of this ProductData.
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets articles
     *
     * @return \Dangl\AVACloud\Model\ArticleDataDto[]
     */
    public function getArticles()
    {
        return $this->container['articles'];
    }

    /**
     * Sets articles
     *
     * @param \Dangl\AVACloud\Model\ArticleDataDto[] $articles The collection of ArticleData that describe this product, e.g. a pipe product could be composed out of multiple pipe segments and fittings.
     *
     * @return $this
     */
    public function setArticles($articles)
    {
        $this->container['articles'] = $articles;

        return $this;
    }

    /**
     * Gets short_text
     *
     * @return string
     */
    public function getShortText()
    {
        return $this->container['short_text'];
    }

    /**
     * Sets short_text
     *
     * @param string $short_text Short description for this ITextElement element.
     *
     * @return $this
     */
    public function setShortText($short_text)
    {
        $this->container['short_text'] = $short_text;

        return $this;
    }

    /**
     * Gets long_text
     *
     * @return string
     */
    public function getLongText()
    {
        return $this->container['long_text'];
    }

    /**
     * Sets long_text
     *
     * @param string $long_text Detailed description for this ITextElement element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText.
     *
     * @return $this
     */
    public function setLongText($long_text)
    {
        $this->container['long_text'] = $long_text;

        return $this;
    }

    /**
     * Gets html_long_text
     *
     * @return string
     */
    public function getHtmlLongText()
    {
        return $this->container['html_long_text'];
    }

    /**
     * Sets html_long_text
     *
     * @param string $html_long_text This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out.
     *
     * @return $this
     */
    public function setHtmlLongText($html_long_text)
    {
        $this->container['html_long_text'] = $html_long_text;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


