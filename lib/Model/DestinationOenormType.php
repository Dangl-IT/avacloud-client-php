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
 * AVACloud API 1.22.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.22.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.24
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
    const LV2009 = 'Lv2009';
    const LB2009 = 'Lb2009';
    const LV2021 = 'Lv2021';
    const LB2021 = 'Lb2021';
    
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
            self::LV2009,
            self::LB2009,
            self::LV2021,
            self::LB2021,
        ];
    }
}


