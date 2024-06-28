<?php
/**
 * InvoiceTotals
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
 * InvoiceTotals Class Doc Comment
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceTotals implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceTotals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_net' => 'float',
        'total_allowances' => 'float',
        'total_charges' => 'float',
        'total_after_deductions' => 'float',
        'total_vat_amount' => 'float',
        'total_gross' => 'float',
        'already_paid_total' => 'float',
        'total_to_be_paid' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_net' => 'decimal',
        'total_allowances' => 'decimal',
        'total_charges' => 'decimal',
        'total_after_deductions' => 'decimal',
        'total_vat_amount' => 'decimal',
        'total_gross' => 'decimal',
        'already_paid_total' => 'decimal',
        'total_to_be_paid' => 'decimal'
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
        'total_net' => 'totalNet',
        'total_allowances' => 'totalAllowances',
        'total_charges' => 'totalCharges',
        'total_after_deductions' => 'totalAfterDeductions',
        'total_vat_amount' => 'totalVatAmount',
        'total_gross' => 'totalGross',
        'already_paid_total' => 'alreadyPaidTotal',
        'total_to_be_paid' => 'totalToBePaid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_net' => 'setTotalNet',
        'total_allowances' => 'setTotalAllowances',
        'total_charges' => 'setTotalCharges',
        'total_after_deductions' => 'setTotalAfterDeductions',
        'total_vat_amount' => 'setTotalVatAmount',
        'total_gross' => 'setTotalGross',
        'already_paid_total' => 'setAlreadyPaidTotal',
        'total_to_be_paid' => 'setTotalToBePaid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_net' => 'getTotalNet',
        'total_allowances' => 'getTotalAllowances',
        'total_charges' => 'getTotalCharges',
        'total_after_deductions' => 'getTotalAfterDeductions',
        'total_vat_amount' => 'getTotalVatAmount',
        'total_gross' => 'getTotalGross',
        'already_paid_total' => 'getAlreadyPaidTotal',
        'total_to_be_paid' => 'getTotalToBePaid'
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
        $this->container['total_net'] = isset($data['total_net']) ? $data['total_net'] : null;
        $this->container['total_allowances'] = isset($data['total_allowances']) ? $data['total_allowances'] : null;
        $this->container['total_charges'] = isset($data['total_charges']) ? $data['total_charges'] : null;
        $this->container['total_after_deductions'] = isset($data['total_after_deductions']) ? $data['total_after_deductions'] : null;
        $this->container['total_vat_amount'] = isset($data['total_vat_amount']) ? $data['total_vat_amount'] : null;
        $this->container['total_gross'] = isset($data['total_gross']) ? $data['total_gross'] : null;
        $this->container['already_paid_total'] = isset($data['already_paid_total']) ? $data['already_paid_total'] : null;
        $this->container['total_to_be_paid'] = isset($data['total_to_be_paid']) ? $data['total_to_be_paid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets total_net
     *
     * @return float
     */
    public function getTotalNet()
    {
        return $this->container['total_net'];
    }

    /**
     * Sets total_net
     *
     * @param float $total_net total_net
     *
     * @return $this
     */
    public function setTotalNet($total_net)
    {
        $this->container['total_net'] = $total_net;

        return $this;
    }

    /**
     * Gets total_allowances
     *
     * @return float
     */
    public function getTotalAllowances()
    {
        return $this->container['total_allowances'];
    }

    /**
     * Sets total_allowances
     *
     * @param float $total_allowances total_allowances
     *
     * @return $this
     */
    public function setTotalAllowances($total_allowances)
    {
        $this->container['total_allowances'] = $total_allowances;

        return $this;
    }

    /**
     * Gets total_charges
     *
     * @return float
     */
    public function getTotalCharges()
    {
        return $this->container['total_charges'];
    }

    /**
     * Sets total_charges
     *
     * @param float $total_charges total_charges
     *
     * @return $this
     */
    public function setTotalCharges($total_charges)
    {
        $this->container['total_charges'] = $total_charges;

        return $this;
    }

    /**
     * Gets total_after_deductions
     *
     * @return float
     */
    public function getTotalAfterDeductions()
    {
        return $this->container['total_after_deductions'];
    }

    /**
     * Sets total_after_deductions
     *
     * @param float $total_after_deductions total_after_deductions
     *
     * @return $this
     */
    public function setTotalAfterDeductions($total_after_deductions)
    {
        $this->container['total_after_deductions'] = $total_after_deductions;

        return $this;
    }

    /**
     * Gets total_vat_amount
     *
     * @return float
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     *
     * @param float $total_vat_amount total_vat_amount
     *
     * @return $this
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        $this->container['total_vat_amount'] = $total_vat_amount;

        return $this;
    }

    /**
     * Gets total_gross
     *
     * @return float
     */
    public function getTotalGross()
    {
        return $this->container['total_gross'];
    }

    /**
     * Sets total_gross
     *
     * @param float $total_gross total_gross
     *
     * @return $this
     */
    public function setTotalGross($total_gross)
    {
        $this->container['total_gross'] = $total_gross;

        return $this;
    }

    /**
     * Gets already_paid_total
     *
     * @return float
     */
    public function getAlreadyPaidTotal()
    {
        return $this->container['already_paid_total'];
    }

    /**
     * Sets already_paid_total
     *
     * @param float $already_paid_total already_paid_total
     *
     * @return $this
     */
    public function setAlreadyPaidTotal($already_paid_total)
    {
        $this->container['already_paid_total'] = $already_paid_total;

        return $this;
    }

    /**
     * Gets total_to_be_paid
     *
     * @return float
     */
    public function getTotalToBePaid()
    {
        return $this->container['total_to_be_paid'];
    }

    /**
     * Sets total_to_be_paid
     *
     * @param float $total_to_be_paid total_to_be_paid
     *
     * @return $this
     */
    public function setTotalToBePaid($total_to_be_paid)
    {
        $this->container['total_to_be_paid'] = $total_to_be_paid;

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


