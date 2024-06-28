<?php
/**
 * VatCategory
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
use \Dangl\AVACloud\ObjectSerializer;

/**
 * VatCategory Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VatCategory
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const STANDARD_RATE = 'StandardRate';
    const ZERO_RATED_GOODS = 'ZeroRatedGoods';
    const EXEMPT_FROM_TAX = 'ExemptFromTax';
    const VAT_REVERSE_CHARGE = 'VatReverseCharge';
    const VAT_EXEMPT_REVERSE_CHARGE = 'VatExemptReverseCharge';
    const FREE_EXPORT_ITEM = 'FreeExportItem';
    const SERVICES_OUTSIDE_SCOPE_OF_TAXATION = 'ServicesOutsideScopeOfTaxation';
    const CANARY_ISLANDS_GENERAL_INDIRECT_TAX = 'CanaryIslandsGeneralIndirectTax';
    const TAX_IN_CEUTA_AND_MELILLA = 'TaxInCeutaAndMelilla';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::STANDARD_RATE,
            self::ZERO_RATED_GOODS,
            self::EXEMPT_FROM_TAX,
            self::VAT_REVERSE_CHARGE,
            self::VAT_EXEMPT_REVERSE_CHARGE,
            self::FREE_EXPORT_ITEM,
            self::SERVICES_OUTSIDE_SCOPE_OF_TAXATION,
            self::CANARY_ISLANDS_GENERAL_INDIRECT_TAX,
            self::TAX_IN_CEUTA_AND_MELILLA,
        ];
    }
}


