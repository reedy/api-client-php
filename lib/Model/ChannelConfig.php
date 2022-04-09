<?php
/**
 * ChannelConfig
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
 * ChannelConfig Class Doc Comment
 *
 * @category Class
 * @description Configuration of the channel.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionTriggerCapabilities' => 'string[]',
        'disablesLocalOperation' => 'bool',
        'relatedChannelId' => 'int',
        'hideInChannelsList' => 'int',
        'actions' => '\Supla\ApiClient\Model\ChannelConfigActionTriggerActions[]',
        'countersAvailable' => 'string[]',
        'resetCountersAvailable' => 'bool',
        'pricePerUnit' => 'float',
        'currency' => 'string',
        'electricityMeterInitialValues' => 'object',
        'temperatureAdjustment' => 'float',
        'humidityAdjustment' => 'float',
        'impulsesPerUnit' => 'int',
        'unit' => 'string',
        'initialValue' => 'int',
        'invertedLogic' => 'bool',
        'timeSettingAvailable' => 'bool',
        'relayTimeS' => 'int',
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
        'actionTriggerCapabilities' => null,
        'disablesLocalOperation' => null,
        'relatedChannelId' => null,
        'hideInChannelsList' => null,
        'actions' => null,
        'countersAvailable' => null,
        'resetCountersAvailable' => null,
        'pricePerUnit' => null,
        'currency' => null,
        'electricityMeterInitialValues' => null,
        'temperatureAdjustment' => null,
        'humidityAdjustment' => null,
        'impulsesPerUnit' => null,
        'unit' => null,
        'initialValue' => null,
        'invertedLogic' => null,
        'timeSettingAvailable' => null,
        'relayTimeS' => null,
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
        'actionTriggerCapabilities' => 'actionTriggerCapabilities',
        'disablesLocalOperation' => 'disablesLocalOperation',
        'relatedChannelId' => 'relatedChannelId',
        'hideInChannelsList' => 'hideInChannelsList',
        'actions' => 'actions',
        'countersAvailable' => 'countersAvailable',
        'resetCountersAvailable' => 'resetCountersAvailable',
        'pricePerUnit' => 'pricePerUnit',
        'currency' => 'currency',
        'electricityMeterInitialValues' => 'electricityMeterInitialValues',
        'temperatureAdjustment' => 'temperatureAdjustment',
        'humidityAdjustment' => 'humidityAdjustment',
        'impulsesPerUnit' => 'impulsesPerUnit',
        'unit' => 'unit',
        'initialValue' => 'initialValue',
        'invertedLogic' => 'invertedLogic',
        'timeSettingAvailable' => 'timeSettingAvailable',
        'relayTimeS' => 'relayTimeS',
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
        'actionTriggerCapabilities' => 'setActionTriggerCapabilities',
        'disablesLocalOperation' => 'setDisablesLocalOperation',
        'relatedChannelId' => 'setRelatedChannelId',
        'hideInChannelsList' => 'setHideInChannelsList',
        'actions' => 'setActions',
        'countersAvailable' => 'setCountersAvailable',
        'resetCountersAvailable' => 'setResetCountersAvailable',
        'pricePerUnit' => 'setPricePerUnit',
        'currency' => 'setCurrency',
        'electricityMeterInitialValues' => 'setElectricityMeterInitialValues',
        'temperatureAdjustment' => 'setTemperatureAdjustment',
        'humidityAdjustment' => 'setHumidityAdjustment',
        'impulsesPerUnit' => 'setImpulsesPerUnit',
        'unit' => 'setUnit',
        'initialValue' => 'setInitialValue',
        'invertedLogic' => 'setInvertedLogic',
        'timeSettingAvailable' => 'setTimeSettingAvailable',
        'relayTimeS' => 'setRelayTimeS',
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
        'actionTriggerCapabilities' => 'getActionTriggerCapabilities',
        'disablesLocalOperation' => 'getDisablesLocalOperation',
        'relatedChannelId' => 'getRelatedChannelId',
        'hideInChannelsList' => 'getHideInChannelsList',
        'actions' => 'getActions',
        'countersAvailable' => 'getCountersAvailable',
        'resetCountersAvailable' => 'getResetCountersAvailable',
        'pricePerUnit' => 'getPricePerUnit',
        'currency' => 'getCurrency',
        'electricityMeterInitialValues' => 'getElectricityMeterInitialValues',
        'temperatureAdjustment' => 'getTemperatureAdjustment',
        'humidityAdjustment' => 'getHumidityAdjustment',
        'impulsesPerUnit' => 'getImpulsesPerUnit',
        'unit' => 'getUnit',
        'initialValue' => 'getInitialValue',
        'invertedLogic' => 'getInvertedLogic',
        'timeSettingAvailable' => 'getTimeSettingAvailable',
        'relayTimeS' => 'getRelayTimeS',
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
        $this->container['actionTriggerCapabilities'] = $data['actionTriggerCapabilities'] ?? null;
        $this->container['disablesLocalOperation'] = $data['disablesLocalOperation'] ?? null;
        $this->container['relatedChannelId'] = $data['relatedChannelId'] ?? null;
        $this->container['hideInChannelsList'] = $data['hideInChannelsList'] ?? null;
        $this->container['actions'] = $data['actions'] ?? null;
        $this->container['countersAvailable'] = $data['countersAvailable'] ?? null;
        $this->container['resetCountersAvailable'] = $data['resetCountersAvailable'] ?? null;
        $this->container['pricePerUnit'] = $data['pricePerUnit'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['electricityMeterInitialValues'] = $data['electricityMeterInitialValues'] ?? null;
        $this->container['temperatureAdjustment'] = $data['temperatureAdjustment'] ?? null;
        $this->container['humidityAdjustment'] = $data['humidityAdjustment'] ?? null;
        $this->container['impulsesPerUnit'] = $data['impulsesPerUnit'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['initialValue'] = $data['initialValue'] ?? null;
        $this->container['invertedLogic'] = $data['invertedLogic'] ?? null;
        $this->container['timeSettingAvailable'] = $data['timeSettingAvailable'] ?? null;
        $this->container['relayTimeS'] = $data['relayTimeS'] ?? null;
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

        if (!is_null($this->container['temperatureAdjustment']) && ($this->container['temperatureAdjustment'] > 10)) {
            $invalidProperties[] = "invalid value for 'temperatureAdjustment', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['temperatureAdjustment']) && ($this->container['temperatureAdjustment'] < -10)) {
            $invalidProperties[] = "invalid value for 'temperatureAdjustment', must be bigger than or equal to -10.";
        }

        if (!is_null($this->container['humidityAdjustment']) && ($this->container['humidityAdjustment'] > 10)) {
            $invalidProperties[] = "invalid value for 'humidityAdjustment', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['humidityAdjustment']) && ($this->container['humidityAdjustment'] < -10)) {
            $invalidProperties[] = "invalid value for 'humidityAdjustment', must be bigger than or equal to -10.";
        }

        if (!is_null($this->container['relayTimeS']) && ($this->container['relayTimeS'] > 7200)) {
            $invalidProperties[] = "invalid value for 'relayTimeS', must be smaller than or equal to 7200.";
        }

        if (!is_null($this->container['relayTimeS']) && ($this->container['relayTimeS'] < 0)) {
            $invalidProperties[] = "invalid value for 'relayTimeS', must be bigger than or equal to 0.";
        }

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
     * Gets actionTriggerCapabilities
     *
     * @return string[]|null
     */
    public function getActionTriggerCapabilities()
    {
        return $this->container['actionTriggerCapabilities'];
    }

    /**
     * Sets actionTriggerCapabilities
     *
     * @param string[]|null $actionTriggerCapabilities List of supported triggers. Set only by the device.
     *
     * @return self
     */
    public function setActionTriggerCapabilities($actionTriggerCapabilities)
    {
        $this->container['actionTriggerCapabilities'] = $actionTriggerCapabilities;

        return $this;
    }

    /**
     * Gets disablesLocalOperation
     *
     * @return bool|null
     */
    public function getDisablesLocalOperation()
    {
        return $this->container['disablesLocalOperation'];
    }

    /**
     * Sets disablesLocalOperation
     *
     * @param bool|null $disablesLocalOperation Tells if enabling the AT disables local function.
     *
     * @return self
     */
    public function setDisablesLocalOperation($disablesLocalOperation)
    {
        $this->container['disablesLocalOperation'] = $disablesLocalOperation;

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
     * Gets hideInChannelsList
     *
     * @return int|null
     */
    public function getHideInChannelsList()
    {
        return $this->container['hideInChannelsList'];
    }

    /**
     * Sets hideInChannelsList
     *
     * @param int|null $hideInChannelsList Whether to display the channel in the main channels list (it's false for ATs with paired channel).
     *
     * @return self
     */
    public function setHideInChannelsList($hideInChannelsList)
    {
        $this->container['hideInChannelsList'] = $hideInChannelsList;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \Supla\ApiClient\Model\ChannelConfigActionTriggerActions[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \Supla\ApiClient\Model\ChannelConfigActionTriggerActions[]|null $actions List of configured AT actions.
     *
     * @return self
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
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
     * Gets temperatureAdjustment
     *
     * @return float|null
     */
    public function getTemperatureAdjustment()
    {
        return $this->container['temperatureAdjustment'];
    }

    /**
     * Sets temperatureAdjustment
     *
     * @param float|null $temperatureAdjustment temperatureAdjustment
     *
     * @return self
     */
    public function setTemperatureAdjustment($temperatureAdjustment)
    {

        if (!is_null($temperatureAdjustment) && ($temperatureAdjustment > 10)) {
            throw new \InvalidArgumentException('invalid value for $temperatureAdjustment when calling ChannelConfig., must be smaller than or equal to 10.');
        }
        if (!is_null($temperatureAdjustment) && ($temperatureAdjustment < -10)) {
            throw new \InvalidArgumentException('invalid value for $temperatureAdjustment when calling ChannelConfig., must be bigger than or equal to -10.');
        }

        $this->container['temperatureAdjustment'] = $temperatureAdjustment;

        return $this;
    }

    /**
     * Gets humidityAdjustment
     *
     * @return float|null
     */
    public function getHumidityAdjustment()
    {
        return $this->container['humidityAdjustment'];
    }

    /**
     * Sets humidityAdjustment
     *
     * @param float|null $humidityAdjustment humidityAdjustment
     *
     * @return self
     */
    public function setHumidityAdjustment($humidityAdjustment)
    {

        if (!is_null($humidityAdjustment) && ($humidityAdjustment > 10)) {
            throw new \InvalidArgumentException('invalid value for $humidityAdjustment when calling ChannelConfig., must be smaller than or equal to 10.');
        }
        if (!is_null($humidityAdjustment) && ($humidityAdjustment < -10)) {
            throw new \InvalidArgumentException('invalid value for $humidityAdjustment when calling ChannelConfig., must be bigger than or equal to -10.');
        }

        $this->container['humidityAdjustment'] = $humidityAdjustment;

        return $this;
    }

    /**
     * Gets impulsesPerUnit
     *
     * @return int|null
     */
    public function getImpulsesPerUnit()
    {
        return $this->container['impulsesPerUnit'];
    }

    /**
     * Sets impulsesPerUnit
     *
     * @param int|null $impulsesPerUnit impulsesPerUnit
     *
     * @return self
     */
    public function setImpulsesPerUnit($impulsesPerUnit)
    {
        $this->container['impulsesPerUnit'] = $impulsesPerUnit;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets initialValue
     *
     * @return int|null
     */
    public function getInitialValue()
    {
        return $this->container['initialValue'];
    }

    /**
     * Sets initialValue
     *
     * @param int|null $initialValue initialValue
     *
     * @return self
     */
    public function setInitialValue($initialValue)
    {
        $this->container['initialValue'] = $initialValue;

        return $this;
    }

    /**
     * Gets invertedLogic
     *
     * @return bool|null
     */
    public function getInvertedLogic()
    {
        return $this->container['invertedLogic'];
    }

    /**
     * Sets invertedLogic
     *
     * @param bool|null $invertedLogic invertedLogic
     *
     * @return self
     */
    public function setInvertedLogic($invertedLogic)
    {
        $this->container['invertedLogic'] = $invertedLogic;

        return $this;
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
     * Gets relayTimeS
     *
     * @return int|null
     */
    public function getRelayTimeS()
    {
        return $this->container['relayTimeS'];
    }

    /**
     * Sets relayTimeS
     *
     * @param int|null $relayTimeS relayTimeS
     *
     * @return self
     */
    public function setRelayTimeS($relayTimeS)
    {

        if (!is_null($relayTimeS) && ($relayTimeS > 7200)) {
            throw new \InvalidArgumentException('invalid value for $relayTimeS when calling ChannelConfig., must be smaller than or equal to 7200.');
        }
        if (!is_null($relayTimeS) && ($relayTimeS < 0)) {
            throw new \InvalidArgumentException('invalid value for $relayTimeS when calling ChannelConfig., must be bigger than or equal to 0.');
        }

        $this->container['relayTimeS'] = $relayTimeS;

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
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToOpen when calling ChannelConfig., must be smaller than or equal to 5.');
        }
        if (!is_null($numberOfAttemptsToOpen) && ($numberOfAttemptsToOpen < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToOpen when calling ChannelConfig., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToClose when calling ChannelConfig., must be smaller than or equal to 5.');
        }
        if (!is_null($numberOfAttemptsToClose) && ($numberOfAttemptsToClose < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfAttemptsToClose when calling ChannelConfig., must be bigger than or equal to 1.');
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


