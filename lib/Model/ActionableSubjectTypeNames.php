<?php
/**
 * ActionableSubjectTypeNames
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.3.37
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Supla\ApiClient\Model;
use \Supla\ApiClient\ObjectSerializer;

/**
 * ActionableSubjectTypeNames Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActionableSubjectTypeNames
{
    /**
     * Possible values of this enum
     */
    const CHANNEL = 'CHANNEL';

    const CHANNEL_GROUP = 'CHANNEL_GROUP';

    const SCENE = 'SCENE';

    const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHANNEL,
            self::CHANNEL_GROUP,
            self::SCENE,
            self::OTHER
        ];
    }
}


