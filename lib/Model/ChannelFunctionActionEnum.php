<?php
/**
 * ChannelFunctionActionEnum
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * ChannelFunctionActionEnum Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelFunctionActionEnum
{
    /**
     * Possible values of this enum
     */
    const OPEN = 'OPEN';
    const CLOSE = 'CLOSE';
    const SHUT = 'SHUT';
    const REVEAL = 'REVEAL';
    const REVEAL_PARTIALLY = 'REVEAL_PARTIALLY';
    const TURN_ON = 'TURN_ON';
    const TURN_OFF = 'TURN_OFF';
    const SET_RGBW_PARAMETERS = 'SET_RGBW_PARAMETERS';
    const OPEN_CLOSE = 'OPEN_CLOSE';
    const STOP = 'STOP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPEN,
            self::CLOSE,
            self::SHUT,
            self::REVEAL,
            self::REVEAL_PARTIALLY,
            self::TURN_ON,
            self::TURN_OFF,
            self::SET_RGBW_PARAMETERS,
            self::OPEN_CLOSE,
            self::STOP,
        ];
    }
}


