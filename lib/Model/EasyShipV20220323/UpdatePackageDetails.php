<?php
/**
 * UpdatePackageDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * UpdatePackageDetails Class Doc Comment
 *
 * @category Class
 * @description Request to update the time slot of a package.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UpdatePackageDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdatePackageDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scheduled_package_id' => '\SellingPartnerApi\Model\EasyShipV20220323\ScheduledPackageId',
        'package_time_slot' => '\SellingPartnerApi\Model\EasyShipV20220323\TimeSlot'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'scheduled_package_id' => null,
        'package_time_slot' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'scheduled_package_id' => 'scheduledPackageId',
        'package_time_slot' => 'packageTimeSlot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduled_package_id' => 'setScheduledPackageId',
        'package_time_slot' => 'setPackageTimeSlot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduled_package_id' => 'getScheduledPackageId',
        'package_time_slot' => 'getPackageTimeSlot'
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
        $this->container['scheduled_package_id'] = $data['scheduled_package_id'] ?? null;
        $this->container['package_time_slot'] = $data['package_time_slot'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scheduled_package_id'] === null) {
            $invalidProperties[] = "'scheduled_package_id' can't be null";
        }
        if ($this->container['package_time_slot'] === null) {
            $invalidProperties[] = "'package_time_slot' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets scheduled_package_id
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\ScheduledPackageId
     */
    public function getScheduledPackageId()
    {
        return $this->container['scheduled_package_id'];
    }

    /**
     * Sets scheduled_package_id
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\ScheduledPackageId $scheduled_package_id scheduled_package_id
     *
     * @return self
     */
    public function setScheduledPackageId($scheduled_package_id)
    {
        $this->container['scheduled_package_id'] = $scheduled_package_id;

        return $this;
    }
    /**
     * Gets package_time_slot
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot
     */
    public function getPackageTimeSlot()
    {
        return $this->container['package_time_slot'];
    }

    /**
     * Sets package_time_slot
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot $package_time_slot package_time_slot
     *
     * @return self
     */
    public function setPackageTimeSlot($package_time_slot)
    {
        $this->container['package_time_slot'] = $package_time_slot;

        return $this;
    }
}


