<?php
/**
 * ChannelGroup
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
 * ChannelGroup Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'caption' => 'string',
        'altIcon' => 'int',
        'hidden' => 'bool',
        'subjectType' => 'string',
        'functionId' => 'int',
        'function' => '\Supla\ApiClient\Model\ChannelFunction',
        'locationId' => 'int',
        'location' => '\Supla\ApiClient\Model\Location',
        'channels' => '\Supla\ApiClient\Model\Channel[]',
        'userIconId' => 'int',
        'possibleActions' => '\Supla\ApiClient\Model\ChannelFunctionAction[]',
        'state' => 'array<string,\Supla\ApiClient\Model\ChannelState>',
        'relationsCount' => '\Supla\ApiClient\Model\ChannelGroupRelationsCount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'caption' => null,
        'altIcon' => null,
        'hidden' => null,
        'subjectType' => null,
        'functionId' => null,
        'function' => null,
        'locationId' => null,
        'location' => null,
        'channels' => null,
        'userIconId' => null,
        'possibleActions' => null,
        'state' => null,
        'relationsCount' => null
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
        'id' => 'id',
        'caption' => 'caption',
        'altIcon' => 'altIcon',
        'hidden' => 'hidden',
        'subjectType' => 'subjectType',
        'functionId' => 'functionId',
        'function' => 'function',
        'locationId' => 'locationId',
        'location' => 'location',
        'channels' => 'channels',
        'userIconId' => 'userIconId',
        'possibleActions' => 'possibleActions',
        'state' => 'state',
        'relationsCount' => 'relationsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'altIcon' => 'setAltIcon',
        'hidden' => 'setHidden',
        'subjectType' => 'setSubjectType',
        'functionId' => 'setFunctionId',
        'function' => 'setFunction',
        'locationId' => 'setLocationId',
        'location' => 'setLocation',
        'channels' => 'setChannels',
        'userIconId' => 'setUserIconId',
        'possibleActions' => 'setPossibleActions',
        'state' => 'setState',
        'relationsCount' => 'setRelationsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'altIcon' => 'getAltIcon',
        'hidden' => 'getHidden',
        'subjectType' => 'getSubjectType',
        'functionId' => 'getFunctionId',
        'function' => 'getFunction',
        'locationId' => 'getLocationId',
        'location' => 'getLocation',
        'channels' => 'getChannels',
        'userIconId' => 'getUserIconId',
        'possibleActions' => 'getPossibleActions',
        'state' => 'getState',
        'relationsCount' => 'getRelationsCount'
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

    const SUBJECT_TYPE_CHANNEL_GROUP = 'channelGroup';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubjectTypeAllowableValues()
    {
        return [
            self::SUBJECT_TYPE_CHANNEL_GROUP,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['altIcon'] = $data['altIcon'] ?? null;
        $this->container['hidden'] = $data['hidden'] ?? null;
        $this->container['subjectType'] = $data['subjectType'] ?? null;
        $this->container['functionId'] = $data['functionId'] ?? null;
        $this->container['function'] = $data['function'] ?? null;
        $this->container['locationId'] = $data['locationId'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['channels'] = $data['channels'] ?? null;
        $this->container['userIconId'] = $data['userIconId'] ?? null;
        $this->container['possibleActions'] = $data['possibleActions'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['relationsCount'] = $data['relationsCount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubjectTypeAllowableValues();
        if (!is_null($this->container['subjectType']) && !in_array($this->container['subjectType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subjectType', must be one of '%s'",
                $this->container['subjectType'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption Caption
     *
     * @return self
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets altIcon
     *
     * @return int|null
     */
    public function getAltIcon()
    {
        return $this->container['altIcon'];
    }

    /**
     * Sets altIcon
     *
     * @param int|null $altIcon Chosen alternative icon idenifier. Should not be greater than the `function.maxAlternativeIconIndex`.
     *
     * @return self
     */
    public function setAltIcon($altIcon)
    {
        $this->container['altIcon'] = $altIcon;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden Whether this channel group is shown on client apps or not
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets subjectType
     *
     * @return string|null
     */
    public function getSubjectType()
    {
        return $this->container['subjectType'];
    }

    /**
     * Sets subjectType
     *
     * @param string|null $subjectType subjectType
     *
     * @return self
     */
    public function setSubjectType($subjectType)
    {
        $allowedValues = $this->getSubjectTypeAllowableValues();
        if (!is_null($subjectType) && !in_array($subjectType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subjectType', must be one of '%s'",
                    $subjectType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subjectType'] = $subjectType;

        return $this;
    }

    /**
     * Gets functionId
     *
     * @return int|null
     */
    public function getFunctionId()
    {
        return $this->container['functionId'];
    }

    /**
     * Sets functionId
     *
     * @param int|null $functionId functionId
     *
     * @return self
     */
    public function setFunctionId($functionId)
    {
        $this->container['functionId'] = $functionId;

        return $this;
    }

    /**
     * Gets function
     *
     * @return \Supla\ApiClient\Model\ChannelFunction|null
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param \Supla\ApiClient\Model\ChannelFunction|null $function function
     *
     * @return self
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets locationId
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     *
     * @param int|null $locationId locationId
     *
     * @return self
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Supla\ApiClient\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Supla\ApiClient\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return \Supla\ApiClient\Model\Channel[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \Supla\ApiClient\Model\Channel[]|null $channels Channel group channels, if requested by the `include` param
     *
     * @return self
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets userIconId
     *
     * @return int|null
     */
    public function getUserIconId()
    {
        return $this->container['userIconId'];
    }

    /**
     * Sets userIconId
     *
     * @param int|null $userIconId userIconId
     *
     * @return self
     */
    public function setUserIconId($userIconId)
    {
        $this->container['userIconId'] = $userIconId;

        return $this;
    }

    /**
     * Gets possibleActions
     *
     * @return \Supla\ApiClient\Model\ChannelFunctionAction[]|null
     */
    public function getPossibleActions()
    {
        return $this->container['possibleActions'];
    }

    /**
     * Sets possibleActions
     *
     * @param \Supla\ApiClient\Model\ChannelFunctionAction[]|null $possibleActions What action can you execute on this subject?
     *
     * @return self
     */
    public function setPossibleActions($possibleActions)
    {
        $this->container['possibleActions'] = $possibleActions;

        return $this;
    }

    /**
     * Gets state
     *
     * @return array<string,\Supla\ApiClient\Model\ChannelState>|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param array<string,\Supla\ApiClient\Model\ChannelState>|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets relationsCount
     *
     * @return \Supla\ApiClient\Model\ChannelGroupRelationsCount|null
     */
    public function getRelationsCount()
    {
        return $this->container['relationsCount'];
    }

    /**
     * Sets relationsCount
     *
     * @param \Supla\ApiClient\Model\ChannelGroupRelationsCount|null $relationsCount relationsCount
     *
     * @return self
     */
    public function setRelationsCount($relationsCount)
    {
        $this->container['relationsCount'] = $relationsCount;

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


