<?php
/**
 * InvoiceType
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
 * InvoiceType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceType
{
    /**
     * Possible values of this enum
     */
    const PARTIAL_INVOICE = 'PartialInvoice';
    const COMMERCIAL_INVOICE = 'CommercialInvoice';
    const CREDIT_NOTE = 'CreditNote';
    const CORRECTED_INVOICE = 'CorrectedInvoice';
    const SELF_BILLED_INVOICE = 'SelfBilledInvoice';
    const PARTIAL_CONSTRUCTION_INVOICE = 'PartialConstructionInvoice';
    const PARTIAL_FINAL_CONSTRUCTION_INVOICE = 'PartialFinalConstructionInvoice';
    const FINAL_CONSTRUCTION_INVOICE = 'FinalConstructionInvoice';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PARTIAL_INVOICE,
            self::COMMERCIAL_INVOICE,
            self::CREDIT_NOTE,
            self::CORRECTED_INVOICE,
            self::SELF_BILLED_INVOICE,
            self::PARTIAL_CONSTRUCTION_INVOICE,
            self::PARTIAL_FINAL_CONSTRUCTION_INVOICE,
            self::FINAL_CONSTRUCTION_INVOICE,
        ];
    }
}

