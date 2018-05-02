<?php
/**
 * ChannelFunctionEnumNames
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
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * ChannelFunctionEnumNames Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelFunctionEnumNames
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
    const CONTROLLINGTHEGATEWAYLOCK = 'CONTROLLINGTHEGATEWAYLOCK';
    const CONTROLLINGTHEGATE = 'CONTROLLINGTHEGATE';
    const CONTROLLINGTHEGARAGEDOOR = 'CONTROLLINGTHEGARAGEDOOR';
    const THERMOMETER = 'THERMOMETER';
    const HUMIDITY = 'HUMIDITY';
    const HUMIDITYANDTEMPERATURE = 'HUMIDITYANDTEMPERATURE';
    const OPENINGSENSOR_GATEWAY = 'OPENINGSENSOR_GATEWAY';
    const OPENINGSENSOR_GATE = 'OPENINGSENSOR_GATE';
    const OPENINGSENSOR_GARAGEDOOR = 'OPENINGSENSOR_GARAGEDOOR';
    const NOLIQUIDSENSOR = 'NOLIQUIDSENSOR';
    const CONTROLLINGTHEDOORLOCK = 'CONTROLLINGTHEDOORLOCK';
    const OPENINGSENSOR_DOOR = 'OPENINGSENSOR_DOOR';
    const CONTROLLINGTHEROLLERSHUTTER = 'CONTROLLINGTHEROLLERSHUTTER';
    const OPENINGSENSOR_ROLLERSHUTTER = 'OPENINGSENSOR_ROLLERSHUTTER';
    const POWERSWITCH = 'POWERSWITCH';
    const LIGHTSWITCH = 'LIGHTSWITCH';
    const DIMMER = 'DIMMER';
    const RGBLIGHTING = 'RGBLIGHTING';
    const DIMMERANDRGBLIGHTING = 'DIMMERANDRGBLIGHTING';
    const DEPTHSENSOR = 'DEPTHSENSOR';
    const DISTANCESENSOR = 'DISTANCESENSOR';
    const OPENINGSENSOR_WINDOW = 'OPENINGSENSOR_WINDOW';
    const MAILSENSOR = 'MAILSENSOR';
    const WINDSENSOR = 'WINDSENSOR';
    const PRESSURESENSOR = 'PRESSURESENSOR';
    const RAINSENSOR = 'RAINSENSOR';
    const WEIGHTSENSOR = 'WEIGHTSENSOR';
    const WEATHER_STATION = 'WEATHER_STATION';
    const STAIRCASETIMER = 'STAIRCASETIMER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::CONTROLLINGTHEGATEWAYLOCK,
            self::CONTROLLINGTHEGATE,
            self::CONTROLLINGTHEGARAGEDOOR,
            self::THERMOMETER,
            self::HUMIDITY,
            self::HUMIDITYANDTEMPERATURE,
            self::OPENINGSENSOR_GATEWAY,
            self::OPENINGSENSOR_GATE,
            self::OPENINGSENSOR_GARAGEDOOR,
            self::NOLIQUIDSENSOR,
            self::CONTROLLINGTHEDOORLOCK,
            self::OPENINGSENSOR_DOOR,
            self::CONTROLLINGTHEROLLERSHUTTER,
            self::OPENINGSENSOR_ROLLERSHUTTER,
            self::POWERSWITCH,
            self::LIGHTSWITCH,
            self::DIMMER,
            self::RGBLIGHTING,
            self::DIMMERANDRGBLIGHTING,
            self::DEPTHSENSOR,
            self::DISTANCESENSOR,
            self::OPENINGSENSOR_WINDOW,
            self::MAILSENSOR,
            self::WINDSENSOR,
            self::PRESSURESENSOR,
            self::RAINSENSOR,
            self::WEIGHTSENSOR,
            self::WEATHER_STATION,
            self::STAIRCASETIMER,
        ];
    }
}


