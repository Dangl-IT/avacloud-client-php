<?php
/**
 * RegisterPost
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
 * RegisterPost Class Doc Comment
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegisterPost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RegisterPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'username' => 'string',
        'email' => 'string',
        'password' => 'string',
        'preferred_languages' => 'string[]',
        'service_login_redirect_uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'username' => null,
        'email' => 'email',
        'password' => null,
        'preferred_languages' => null,
        'service_login_redirect_uri' => null
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
        'username' => 'username',
        'email' => 'email',
        'password' => 'password',
        'preferred_languages' => 'preferredLanguages',
        'service_login_redirect_uri' => 'serviceLoginRedirectUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'preferred_languages' => 'setPreferredLanguages',
        'service_login_redirect_uri' => 'setServiceLoginRedirectUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'preferred_languages' => 'getPreferredLanguages',
        'service_login_redirect_uri' => 'getServiceLoginRedirectUri'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['preferred_languages'] = isset($data['preferred_languages']) ? $data['preferred_languages'] : null;
        $this->container['service_login_redirect_uri'] = isset($data['service_login_redirect_uri']) ? $data['service_login_redirect_uri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ((mb_strlen($this->container['username']) < 1)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) < 10)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 10.";
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {

        if ((mb_strlen($username) < 1)) {
            throw new \InvalidArgumentException('invalid length for $username when calling RegisterPost., must be bigger than or equal to 1.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {

        if ((mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling RegisterPost., must be bigger than or equal to 1.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {

        if ((mb_strlen($password) < 10)) {
            throw new \InvalidArgumentException('invalid length for $password when calling RegisterPost., must be bigger than or equal to 10.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets preferred_languages
     *
     * @return string[]
     */
    public function getPreferredLanguages()
    {
        return $this->container['preferred_languages'];
    }

    /**
     * Sets preferred_languages
     *
     * @param string[] $preferred_languages preferred_languages
     *
     * @return $this
     */
    public function setPreferredLanguages($preferred_languages)
    {
        $this->container['preferred_languages'] = $preferred_languages;

        return $this;
    }

    /**
     * Gets service_login_redirect_uri
     *
     * @return string
     */
    public function getServiceLoginRedirectUri()
    {
        return $this->container['service_login_redirect_uri'];
    }

    /**
     * Sets service_login_redirect_uri
     *
     * @param string $service_login_redirect_uri service_login_redirect_uri
     *
     * @return $this
     */
    public function setServiceLoginRedirectUri($service_login_redirect_uri)
    {
        $this->container['service_login_redirect_uri'] = $service_login_redirect_uri;

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


