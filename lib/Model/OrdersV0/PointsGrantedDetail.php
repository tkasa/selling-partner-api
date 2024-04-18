<?php
/**
 * PointsGrantedDetail
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\OrdersV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * PointsGrantedDetail Class Doc Comment
 *
 * @category Class
 * @description The number of Amazon Points offered with the purchase of an item, and their monetary value.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PointsGrantedDetail extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PointsGrantedDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'points_number' => 'int',
        'points_monetary_value' => '\SellingPartnerApi\Model\OrdersV0\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'points_number' => null,
        'points_monetary_value' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'points_number' => 'PointsNumber',
        'points_monetary_value' => 'PointsMonetaryValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'points_number' => 'setPointsNumber',
        'points_monetary_value' => 'setPointsMonetaryValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'points_number' => 'getPointsNumber',
        'points_monetary_value' => 'getPointsMonetaryValue'
    ];


    
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
        $this->container['points_number'] = $data['points_number'] ?? null;
        $this->container['points_monetary_value'] = $data['points_monetary_value'] ?? null;
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
     * Gets points_number
     *
     * @return int|null
     */
    public function getPointsNumber()
    {
        return $this->container['points_number'];
    }

    /**
     * Sets points_number
     *
     * @param int|null $points_number The number of Amazon Points granted with the purchase of an item.
     *
     * @return self
     */
    public function setPointsNumber($points_number)
    {
        $this->container['points_number'] = $points_number;

        return $this;
    }
    /**
     * Gets points_monetary_value
     *
     * @return \SellingPartnerApi\Model\OrdersV0\Money|null
     */
    public function getPointsMonetaryValue()
    {
        return $this->container['points_monetary_value'];
    }

    /**
     * Sets points_monetary_value
     *
     * @param \SellingPartnerApi\Model\OrdersV0\Money|null $points_monetary_value points_monetary_value
     *
     * @return self
     */
    public function setPointsMonetaryValue($points_monetary_value)
    {
        $this->container['points_monetary_value'] = $points_monetary_value;

        return $this;
    }
}


