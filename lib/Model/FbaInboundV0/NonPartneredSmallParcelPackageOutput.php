<?php
/**
 * NonPartneredSmallParcelPackageOutput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * NonPartneredSmallParcelPackageOutput Class Doc Comment
 *
 * @category Class
 * @description Carrier, tracking number, and status information for the package.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NonPartneredSmallParcelPackageOutput extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NonPartneredSmallParcelPackageOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_name' => 'string',
        'tracking_id' => 'string',
        'package_status' => '\SellingPartnerApi\Model\FbaInboundV0\PackageStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier_name' => null,
        'tracking_id' => null,
        'package_status' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'carrier_name' => 'CarrierName',
        'tracking_id' => 'TrackingId',
        'package_status' => 'PackageStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName',
        'tracking_id' => 'setTrackingId',
        'package_status' => 'setPackageStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName',
        'tracking_id' => 'getTrackingId',
        'package_status' => 'getPackageStatus'
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
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['package_status'] = $data['package_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['tracking_id'] === null) {
            $invalidProperties[] = "'tracking_id' can't be null";
        }
        if ($this->container['package_status'] === null) {
            $invalidProperties[] = "'package_status' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The carrier that you are using for the inbound shipment.
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }
    /**
     * Gets tracking_id
     *
     * @return string
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string $tracking_id The tracking number of the package, provided by the carrier.
     *
     * @return self
     */
    public function setTrackingId($tracking_id)
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }
    /**
     * Gets package_status
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PackageStatus
     */
    public function getPackageStatus()
    {
        return $this->container['package_status'];
    }

    /**
     * Sets package_status
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PackageStatus $package_status package_status
     *
     * @return self
     */
    public function setPackageStatus($package_status)
    {
        $this->container['package_status'] = $package_status;

        return $this;
    }
}


