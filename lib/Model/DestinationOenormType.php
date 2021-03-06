<?php
/**
 * DestinationOenormType
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
use \Dangl\AVACloud\ObjectSerializer;

/**
 * DestinationOenormType Class Doc Comment
 *
 * @category Class
 * @description Represents valid Oenorm target types
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinationOenormType
{
    /**
     * Possible values of this enum
     */
    const LV2015 = 'Lv2015';
    const LB2015 = 'Lb2015';
    const B2063 = 'B2063';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LV2015,
            self::LB2015,
            self::B2063,
        ];
    }
}


