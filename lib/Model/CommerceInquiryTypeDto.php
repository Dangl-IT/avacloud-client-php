<?php
/**
 * CommerceInquiryTypeDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.41.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.41.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.31
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl\AVACloud\Model;
use \Dangl\AVACloud\ObjectSerializer;

/**
 * CommerceInquiryTypeDto Class Doc Comment
 *
 * @category Class
 * @description This enum represents types of price inquiries
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommerceInquiryTypeDto
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const PROJECT = 'Project';
    const IMMEDIATE = 'Immediate';
    const EXHIBITION = 'Exhibition';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PROJECT,
            self::IMMEDIATE,
            self::EXHIBITION,
        ];
    }
}


