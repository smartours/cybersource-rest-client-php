<?php
/**
 * Riskv1authenticationsTravelInformationLegs
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Riskv1authenticationsTravelInformationLegs Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1authenticationsTravelInformationLegs implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1authentications_travelInformation_legs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'origination' => 'string',
        'destination' => 'string',
        'carrierCode' => 'string',
        'departureDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'origination' => null,
        'destination' => null,
        'carrierCode' => null,
        'departureDate' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'origination' => 'origination',
        'destination' => 'destination',
        'carrierCode' => 'carrierCode',
        'departureDate' => 'departureDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'origination' => 'setOrigination',
        'destination' => 'setDestination',
        'carrierCode' => 'setCarrierCode',
        'departureDate' => 'setDepartureDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'origination' => 'getOrigination',
        'destination' => 'getDestination',
        'carrierCode' => 'getCarrierCode',
        'departureDate' => 'getDepartureDate'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['origination'] = isset($data['origination']) ? $data['origination'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['carrierCode'] = isset($data['carrierCode']) ? $data['carrierCode'] : null;
        $this->container['departureDate'] = isset($data['departureDate']) ? $data['departureDate'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['origination']) && (strlen($this->container['origination']) > 3)) {
            $invalid_properties[] = "invalid value for 'origination', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['destination']) && (strlen($this->container['destination']) > 3)) {
            $invalid_properties[] = "invalid value for 'destination', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['carrierCode']) && (strlen($this->container['carrierCode']) > 2)) {
            $invalid_properties[] = "invalid value for 'carrierCode', the character length must be smaller than or equal to 2.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['origination']) > 3) {
            return false;
        }
        if (strlen($this->container['destination']) > 3) {
            return false;
        }
        if (strlen($this->container['carrierCode']) > 2) {
            return false;
        }
        return true;
    }


    /**
     * Gets origination
     * @return string
     */
    public function getOrigination()
    {
        return $this->container['origination'];
    }

    /**
     * Sets origination
     * @param string $origination Use to specify the airport code for the origin of the leg of the trip, which is designated by the pound (#) symbol in the field name. This code is usually three digits long, for example: SFO = San Francisco. Do not use the colon (:) or the dash (-). For airport codes, see the IATA Airline and Airport Code Search. The leg number can be a positive integer from 0 to N. For example: `travelInformation.legs.0.origination=SFO` `travelInformation.legs.1.origination=SFO`  **Note** In your request, send either the complete route or the individual legs (`legs.0.origination` and `legs.n.destination`). If you send all the fields, the complete route takes precedence over the individual legs.  For details, see the `decision_manager_travel_leg#_orig` field description in _Decision Manager Using the SCMP API Developer Guide_ on the [CyberSource Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setOrigination($origination)
    {
        if (!is_null($origination) && (strlen($origination) > 3)) {
            throw new \InvalidArgumentException('invalid length for $origination when calling Riskv1authenticationsTravelInformationLegs., must be smaller than or equal to 3.');
        }

        $this->container['origination'] = $origination;

        return $this;
    }

    /**
     * Gets destination
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     * @param string $destination Use to specify the airport code for the destination of the leg of the trip, which is designated by the pound (#) symbol in the field name. This code is usually three digits long, for example: SFO = San Francisco. Do not use the colon (:) or the dash (-). For airport codes, see [IATA Airline and Airport Code Search](https://www.iata.org/publications/Pages/code-search.aspx). The leg number can be a positive integer from 0 to N. For example:  `travelInformation.legs.0.destination=SFO` `travelInformation.legs.1.destination=SFO`  **Note** In your request, send either the complete route or the individual legs (`legs.0.origination` and `legs.n.destination`). If you send all the fields, the complete route takes precedence over the individual legs.  For details, see the `decision_manager_travel_leg#_dest` field description in _Decision Manager Using the SCMP API Developer Guide_ on the [CyberSource Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setDestination($destination)
    {
        if (!is_null($destination) && (strlen($destination) > 3)) {
            throw new \InvalidArgumentException('invalid length for $destination when calling Riskv1authenticationsTravelInformationLegs., must be smaller than or equal to 3.');
        }

        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets carrierCode
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrierCode'];
    }

    /**
     * Sets carrierCode
     * @param string $carrierCode International Air Transport Association (IATA) code for the carrier for this leg of the trip. Required for each leg. Required for American Express SafeKey (U.S.) for travel-related requests.  For details, see `airline_leg#_carrier_code` in [Airline Processing Using the SCMP API.] (https://apps.cybersource.com/library/documentation/dev_guides/Airline_SCMP_API/Airline_SCMP_API.pdf)
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        if (!is_null($carrierCode) && (strlen($carrierCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $carrierCode when calling Riskv1authenticationsTravelInformationLegs., must be smaller than or equal to 2.');
        }

        $this->container['carrierCode'] = $carrierCode;

        return $this;
    }

    /**
     * Gets departureDate
     * @return string
     */
    public function getDepartureDate()
    {
        return $this->container['departureDate'];
    }

    /**
     * Sets departureDate
     * @param string $departureDate Departure date for the first leg of the trip. Format: YYYYMMDD. Required for American Express SafeKey (U.S.) for travel-related requests.  For details, see `airline_leg#_leg_departure_date` in [Airline Processing Using the SCMP API.] (https://apps.cybersource.com/library/documentation/dev_guides/Airline_SCMP_API/Airline_SCMP_API.pdf)
     * @return $this
     */
    public function setDepartureDate($departureDate)
    {
        $this->container['departureDate'] = $departureDate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


