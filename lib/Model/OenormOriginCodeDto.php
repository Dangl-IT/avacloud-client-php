<?php
/**
 * OenormOriginCodeDto
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
 * OenormOriginCodeDto Class Doc Comment
 *
 * @category Class
 * @description This indicates where the content of this element originates, if set. It corresponds to &#39;herkunftskennzeichen&#39; in ÖNorm
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OenormOriginCodeDto
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const FREE_TEXT = 'FreeText';
    const ADDITION_DESCRIPTION = 'AdditionDescription';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::FREE_TEXT,
            self::ADDITION_DESCRIPTION,
        ];
    }
}


