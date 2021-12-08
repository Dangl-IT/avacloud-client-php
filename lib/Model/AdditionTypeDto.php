<?php
/**
 * AdditionTypeDto
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
 * AdditionTypeDto Class Doc Comment
 *
 * @category Class
 * @description Indicates the origin of an element.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdditionTypeDto
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const BY_BUYER = 'ByBuyer';
    const BY_BIDDER = 'ByBidder';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::BY_BUYER,
            self::BY_BIDDER,
        ];
    }
}


