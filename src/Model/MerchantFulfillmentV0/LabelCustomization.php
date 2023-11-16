<?php declare(strict_types=1);
/**
 * LabelCustomization
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * LabelCustomization Class Doc Comment
 *
 * @category Class
 * @description Custom text for shipping labels.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LabelCustomization extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelCustomization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_text_for_label' => 'string',
        'standard_id_for_label' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\StandardIdForLabel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_text_for_label' => null,
        'standard_id_for_label' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'custom_text_for_label' => 'CustomTextForLabel',
        'standard_id_for_label' => 'StandardIdForLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_text_for_label' => 'setCustomTextForLabel',
        'standard_id_for_label' => 'setStandardIdForLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_text_for_label' => 'getCustomTextForLabel',
        'standard_id_for_label' => 'getStandardIdForLabel'
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
        $this->container['custom_text_for_label'] = $data['custom_text_for_label'] ?? null;
        $this->container['standard_id_for_label'] = $data['standard_id_for_label'] ?? null;
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
     * Gets custom_text_for_label
     *
     * @return string|null
     */
    public function getCustomTextForLabel()
    {
        return $this->container['custom_text_for_label'];
    }

    /**
     * Sets custom_text_for_label
     *
     * @param string|null $custom_text_for_label Custom text to print on the label. Note: Custom text is only included on labels that are in ZPL format (ZPL203). FedEx does not support CustomTextForLabel.
     *
     * @return self
     */
    public function setCustomTextForLabel($custom_text_for_label)
    {
        $this->container['custom_text_for_label'] = $custom_text_for_label;

        return $this;
    }
    /**
     * Gets standard_id_for_label
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\StandardIdForLabel|null
     */
    public function getStandardIdForLabel()
    {
        return $this->container['standard_id_for_label'];
    }

    /**
     * Sets standard_id_for_label
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\StandardIdForLabel|null $standard_id_for_label standard_id_for_label
     *
     * @return self
     */
    public function setStandardIdForLabel($standard_id_for_label)
    {
        $this->container['standard_id_for_label'] = $standard_id_for_label;

        return $this;
    }
}

