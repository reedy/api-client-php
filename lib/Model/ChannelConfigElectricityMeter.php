<?php
/**
 * ChannelConfigElectricityMeter
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
 * The version of the OpenAPI document: 23.05
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Supla\ApiClient\Model;

use \ArrayAccess;
use \Supla\ApiClient\ObjectSerializer;

/**
 * ChannelConfigElectricityMeter Class Doc Comment
 *
 * @category Class
 * @description Config for &#x60;ELECTRICITYMETER&#x60;
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelConfigElectricityMeter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelConfigElectricityMeter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'countersAvailable' => 'string[]',
        'resetCountersAvailable' => 'bool',
        'pricePerUnit' => 'float',
        'currency' => 'string',
        'electricityMeterInitialValues' => 'object',
        'relatedChannelId' => 'int',
        'addToHistory' => 'bool',
        'lowerVoltageThreshold' => 'float',
        'upperVoltageThreshold' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'countersAvailable' => null,
        'resetCountersAvailable' => null,
        'pricePerUnit' => null,
        'currency' => null,
        'electricityMeterInitialValues' => null,
        'relatedChannelId' => null,
        'addToHistory' => null,
        'lowerVoltageThreshold' => null,
        'upperVoltageThreshold' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'countersAvailable' => 'countersAvailable',
        'resetCountersAvailable' => 'resetCountersAvailable',
        'pricePerUnit' => 'pricePerUnit',
        'currency' => 'currency',
        'electricityMeterInitialValues' => 'electricityMeterInitialValues',
        'relatedChannelId' => 'relatedChannelId',
        'addToHistory' => 'addToHistory',
        'lowerVoltageThreshold' => 'lowerVoltageThreshold',
        'upperVoltageThreshold' => 'upperVoltageThreshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'countersAvailable' => 'setCountersAvailable',
        'resetCountersAvailable' => 'setResetCountersAvailable',
        'pricePerUnit' => 'setPricePerUnit',
        'currency' => 'setCurrency',
        'electricityMeterInitialValues' => 'setElectricityMeterInitialValues',
        'relatedChannelId' => 'setRelatedChannelId',
        'addToHistory' => 'setAddToHistory',
        'lowerVoltageThreshold' => 'setLowerVoltageThreshold',
        'upperVoltageThreshold' => 'setUpperVoltageThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'countersAvailable' => 'getCountersAvailable',
        'resetCountersAvailable' => 'getResetCountersAvailable',
        'pricePerUnit' => 'getPricePerUnit',
        'currency' => 'getCurrency',
        'electricityMeterInitialValues' => 'getElectricityMeterInitialValues',
        'relatedChannelId' => 'getRelatedChannelId',
        'addToHistory' => 'getAddToHistory',
        'lowerVoltageThreshold' => 'getLowerVoltageThreshold',
        'upperVoltageThreshold' => 'getUpperVoltageThreshold'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['countersAvailable'] = $data['countersAvailable'] ?? null;
        $this->container['resetCountersAvailable'] = $data['resetCountersAvailable'] ?? null;
        $this->container['pricePerUnit'] = $data['pricePerUnit'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['electricityMeterInitialValues'] = $data['electricityMeterInitialValues'] ?? null;
        $this->container['relatedChannelId'] = $data['relatedChannelId'] ?? null;
        $this->container['addToHistory'] = $data['addToHistory'] ?? null;
        $this->container['lowerVoltageThreshold'] = $data['lowerVoltageThreshold'] ?? null;
        $this->container['upperVoltageThreshold'] = $data['upperVoltageThreshold'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets countersAvailable
     *
     * @return string[]|null
     */
    public function getCountersAvailable()
    {
        return $this->container['countersAvailable'];
    }

    /**
     * Sets countersAvailable
     *
     * @param string[]|null $countersAvailable List of available counters supported by this channel.
     *
     * @return self
     */
    public function setCountersAvailable($countersAvailable)
    {
        $this->container['countersAvailable'] = $countersAvailable;

        return $this;
    }

    /**
     * Gets resetCountersAvailable
     *
     * @return bool|null
     */
    public function getResetCountersAvailable()
    {
        return $this->container['resetCountersAvailable'];
    }

    /**
     * Sets resetCountersAvailable
     *
     * @param bool|null $resetCountersAvailable resetCountersAvailable
     *
     * @return self
     */
    public function setResetCountersAvailable($resetCountersAvailable)
    {
        $this->container['resetCountersAvailable'] = $resetCountersAvailable;

        return $this;
    }

    /**
     * Gets pricePerUnit
     *
     * @return float|null
     */
    public function getPricePerUnit()
    {
        return $this->container['pricePerUnit'];
    }

    /**
     * Sets pricePerUnit
     *
     * @param float|null $pricePerUnit pricePerUnit
     *
     * @return self
     */
    public function setPricePerUnit($pricePerUnit)
    {
        $this->container['pricePerUnit'] = $pricePerUnit;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets electricityMeterInitialValues
     *
     * @return object|null
     */
    public function getElectricityMeterInitialValues()
    {
        return $this->container['electricityMeterInitialValues'];
    }

    /**
     * Sets electricityMeterInitialValues
     *
     * @param object|null $electricityMeterInitialValues electricityMeterInitialValues
     *
     * @return self
     */
    public function setElectricityMeterInitialValues($electricityMeterInitialValues)
    {
        $this->container['electricityMeterInitialValues'] = $electricityMeterInitialValues;

        return $this;
    }

    /**
     * Gets relatedChannelId
     *
     * @return int|null
     */
    public function getRelatedChannelId()
    {
        return $this->container['relatedChannelId'];
    }

    /**
     * Sets relatedChannelId
     *
     * @param int|null $relatedChannelId relatedChannelId
     *
     * @return self
     */
    public function setRelatedChannelId($relatedChannelId)
    {
        $this->container['relatedChannelId'] = $relatedChannelId;

        return $this;
    }

    /**
     * Gets addToHistory
     *
     * @return bool|null
     */
    public function getAddToHistory()
    {
        return $this->container['addToHistory'];
    }

    /**
     * Sets addToHistory
     *
     * @param bool|null $addToHistory addToHistory
     *
     * @return self
     */
    public function setAddToHistory($addToHistory)
    {
        $this->container['addToHistory'] = $addToHistory;

        return $this;
    }

    /**
     * Gets lowerVoltageThreshold
     *
     * @return float|null
     */
    public function getLowerVoltageThreshold()
    {
        return $this->container['lowerVoltageThreshold'];
    }

    /**
     * Sets lowerVoltageThreshold
     *
     * @param float|null $lowerVoltageThreshold lowerVoltageThreshold
     *
     * @return self
     */
    public function setLowerVoltageThreshold($lowerVoltageThreshold)
    {
        $this->container['lowerVoltageThreshold'] = $lowerVoltageThreshold;

        return $this;
    }

    /**
     * Gets upperVoltageThreshold
     *
     * @return float|null
     */
    public function getUpperVoltageThreshold()
    {
        return $this->container['upperVoltageThreshold'];
    }

    /**
     * Sets upperVoltageThreshold
     *
     * @param float|null $upperVoltageThreshold upperVoltageThreshold
     *
     * @return self
     */
    public function setUpperVoltageThreshold($upperVoltageThreshold)
    {
        $this->container['upperVoltageThreshold'] = $upperVoltageThreshold;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


