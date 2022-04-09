<?php
/**
 * ChannelConfigControllingTheGate
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

use \ArrayAccess;
use \Supla\ApiClient\ObjectSerializer;

/**
 * ChannelConfigControllingTheGate Class Doc Comment
 *
 * @category Class
 * @description Config for &#x60;CONTROLLINGTHEGARAGEDOOR&#x60; and &#x60;CONTROLLINGTHEGATE&#x60;.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelConfigControllingTheGate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelConfigControllingTheGate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timeSettingAvailable' => 'bool',
        'relayTimeMs' => 'int',
        'openingSensorChannelId' => 'int',
        'openingSensorSecondaryChannelId' => 'int',
        'numberOfAttemptsToOpen' => 'int',
        'numberOfAttemptsToClose' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timeSettingAvailable' => null,
        'relayTimeMs' => null,
        'openingSensorChannelId' => null,
        'openingSensorSecondaryChannelId' => null,
        'numberOfAttemptsToOpen' => null,
        'numberOfAttemptsToClose' => null
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
        'timeSettingAvailable' => 'timeSettingAvailable',
        'relayTimeMs' => 'relayTimeMs',
        'openingSensorChannelId' => 'openingSensorChannelId',
        'openingSensorSecondaryChannelId' => 'openingSensorSecondaryChannelId',
        'numberOfAttemptsToOpen' => 'numberOfAttemptsToOpen',
        'numberOfAttemptsToClose' => 'numberOfAttemptsToClose'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timeSettingAvailable' => 'setTimeSettingAvailable',
        'relayTimeMs' => 'setRelayTimeMs',
        'openingSensorChannelId' => 'setOpeningSensorChannelId',
        'openingSensorSecondaryChannelId' => 'setOpeningSensorSecondaryChannelId',
        'numberOfAttemptsToOpen' => 'setNumberOfAttemptsToOpen',
        'numberOfAttemptsToClose' => 'setNumberOfAttemptsToClose'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timeSettingAvailable' => 'getTimeSettingAvailable',
        'relayTimeMs' => 'getRelayTimeMs',
        'openingSensorChannelId' => 'getOpeningSensorChannelId',
        'openingSensorSecondaryChannelId' => 'getOpeningSensorSecondaryChannelId',
        'numberOfAttemptsToOpen' => 'getNumberOfAttemptsToOpen',
        'numberOfAttemptsToClose' => 'getNumberOfAttemptsToClose'
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
        $this->container['timeSettingAvailable'] = $data['timeSettingAvailable'] ?? null;
        $this->container['relayTimeMs'] = $data['relayTimeMs'] ?? null;
        $this->container['openingSensorChannelId'] = $data['openingSensorChannelId'] ?? null;
        $this->container['openingSensorSecondaryChannelId'] = $data['openingSensorSecondaryChannelId'] ?? null;
        $this->container['numberOfAttemptsToOpen'] = $data['numberOfAttemptsToOpen'] ?? null;
        $this->container['numberOfAttemptsToClose'] = $data['numberOfAttemptsToClose'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['numberOfAttemptsToOpen']) && ($this->container['numberOfAttemptsToOpen'] > 5)) {
            $invalidProperties[] = "invalid value for 'numberOfAttemptsToOpen', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['numberOfAttemptsToOpen']) && ($this->container['numberOfAttemptsToOpen'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberOfAttemptsToOpen', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['numberOfAttemptsToClose']) && ($this->container['numberOfAttemptsToClose'] > 5)) {
            $invalidProperties[] = "invalid value for 'numberOfAttemptsToClose', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['numberOfAttemptsToClose']) && ($this->container['numberOfAttemptsToClose'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberOfAttemptsToClose', must be bigger than or equal to 1.";
        }

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
     * Gets timeSettingAvailable
     *
     * @return bool|null
     */
    public function getTimeSettingAvailable()
    {
        return $this->container['timeSettingAvailable'];
    }

    /**
     * Sets timeSettingAvailable
     *
     * @param bool|null $timeSettingAvailable timeSettingAvailable
     *
     * @return self
     */
    public function setTimeSettingAvailable($timeSettingAvailable)
    {
        $this->container['timeSettingAvailable'] = $timeSettingAvailable;

        return $this;
    }

    /**
     * Gets relayTimeMs
     *
     * @return int|null
     */
    public function getRelayTimeMs()
    {
        return $this->container['relayTimeMs'];
    }

    /**
     * Sets relayTimeMs
     *
     * @param int|null $relayTimeMs relayTimeMs
     *
     * @return self
     */
    public function setRelayTimeMs($relayTimeMs)
    {
        $this->container['relayTimeMs'] = $relayTimeMs;

        return $this;
    }

    /**
     * Gets openingSensorChannelId
     *
     * @return int|null
     */
    public function getOpeningSensorChannelId()
    {
        return $this->container['openingSensorChannelId'];
    }

    /**
     * Sets openingSensorChannelId
     *
     * @param int|null $openingSensorChannelId openingSensorChannelId
     *
     * @return self
     */
    public function setOpeningSensorChannelId($openingSensorChannelId)
    {
        $this->container['openingSensorChannelId'] = $openingSensorChannelId;

        return $this;
    }

    /**
     * Gets openingSensorSecondaryChannelId
     *
     * @return int|null
     */
    public function getOpeningSensorSecondaryChannelId()
    {
        return $this->container['openingSensorSecondaryChannelId'];
    }

    /**
     * Sets openingSensorSecondaryChannelId
     *
     * @param int|null $openingSensorSecondaryChannelId openingSensorSecondaryChannelId
     *
     * @return self
     */
    public function setOpeningSensorSecondaryChannelId($openingSensorSecondaryChannelId)
    {
        $this->container['openingSensorSecondaryChannelId'] = $openingSensorSecondaryChannelId;

        return $this;
    }

    /**
     * Gets numberOfAttemptsToOpen
     *
     * @return int|null
     */
    public function getNumberOfAttemptsToOpen()
    {
        return $this->container['numberOfAttemptsToOpen'];
    }

    /**
     * Sets numberOfAttemptsToOpen
     *
     * @param int|null $numberOfAttemptsToOpen numberOfAttemptsToOpen
     *
     * @return self
     */
    public function setNumberOfAttemptsToOpen($numberOfAttemptsToOpen)
    {

        if (!is_null($numberOfAttemptsToOpen) && ($numberOfAttemptsToOpen > 5)) {
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToOpen when calling ChannelConfigControllingTheGate., must be smaller than or equal to 5.');
        }
        if (!is_null($numberOfAttemptsToOpen) && ($numberOfAttemptsToOpen < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToOpen when calling ChannelConfigControllingTheGate., must be bigger than or equal to 1.');
        }

        $this->container['numberOfAttemptsToOpen'] = $numberOfAttemptsToOpen;

        return $this;
    }

    /**
     * Gets numberOfAttemptsToClose
     *
     * @return int|null
     */
    public function getNumberOfAttemptsToClose()
    {
        return $this->container['numberOfAttemptsToClose'];
    }

    /**
     * Sets numberOfAttemptsToClose
     *
     * @param int|null $numberOfAttemptsToClose numberOfAttemptsToClose
     *
     * @return self
     */
    public function setNumberOfAttemptsToClose($numberOfAttemptsToClose)
    {

        if (!is_null($numberOfAttemptsToClose) && ($numberOfAttemptsToClose > 5)) {
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToClose when calling ChannelConfigControllingTheGate., must be smaller than or equal to 5.');
        }
        if (!is_null($numberOfAttemptsToClose) && ($numberOfAttemptsToClose < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToClose when calling ChannelConfigControllingTheGate., must be bigger than or equal to 1.');
        }

        $this->container['numberOfAttemptsToClose'] = $numberOfAttemptsToClose;

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


