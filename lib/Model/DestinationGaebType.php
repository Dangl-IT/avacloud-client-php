<?php
/**
 * DestinationGaebType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.9.1
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.9.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * DestinationGaebType Class Doc Comment
 *
 * @category Class
 * @description Represents valid GAEB target types
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinationGaebType
{
    /**
     * Possible values of this enum
     */
    const GAEB90 = 'Gaeb90';
    const GAEB2000 = 'Gaeb2000';
    const GAEB2000_COMMERCE = 'Gaeb2000Commerce';
    const GAEB_XML_V3_1 = 'GaebXml_V3_1';
    const GAEB_XML_V3_2 = 'GaebXml_V3_2';
    const GAEB_XML_V3_2_COMMERCE = 'GaebXml_V3_2_Commerce';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GAEB90,
            self::GAEB2000,
            self::GAEB2000_COMMERCE,
            self::GAEB_XML_V3_1,
            self::GAEB_XML_V3_2,
            self::GAEB_XML_V3_2_COMMERCE,
        ];
    }
}


