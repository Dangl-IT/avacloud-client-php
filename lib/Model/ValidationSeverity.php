<?php
/**
 * ValidationSeverity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.30.6
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.30.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl\AVACloud\Model;
use \Dangl\AVACloud\ObjectSerializer;

/**
 * ValidationSeverity Class Doc Comment
 *
 * @category Class
 * @description Indicates the severity of a check
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValidationSeverity
{
    /**
     * Possible values of this enum
     */
    const INFORMATION = 'Information';
    const WARNING = 'Warning';
    const ERROR = 'Error';
    const CRITICAL = 'Critical';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INFORMATION,
            self::WARNING,
            self::ERROR,
            self::CRITICAL,
        ];
    }
}


