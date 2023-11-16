<?php declare(strict_types=1);
/**
 * GetMessagingActionResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Messaging
 *
 * With the Messaging API you can build applications that send messages to buyers. You can get a list of message types that are available for an order that you specify, then call an operation that sends a message to the buyer for that order. The Messaging API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MessagingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetMessagingActionResponse Class Doc Comment
 *
 * @category Class
 * @description Describes a messaging action that can be taken for an order. Provides a JSON Hypertext Application Language (HAL) link to the JSON schema document that describes the expected input.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetMessagingActionResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetMessagingActionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_links' => '\SellingPartnerApi\Model\MessagingV1\GetMessagingActionResponseLinks',
        '_embedded' => '\SellingPartnerApi\Model\MessagingV1\GetMessagingActionResponseEmbedded',
        'payload' => '\SellingPartnerApi\Model\MessagingV1\MessagingAction',
        'errors' => '\SellingPartnerApi\Model\MessagingV1\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_links' => null,
        '_embedded' => null,
        'payload' => null,
        'errors' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_links' => '_links',
        '_embedded' => '_embedded',
        'payload' => 'payload',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_links' => 'setLinks',
        '_embedded' => 'setEmbedded',
        'payload' => 'setPayload',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_links' => 'getLinks',
        '_embedded' => 'getEmbedded',
        'payload' => 'getPayload',
        'errors' => 'getErrors'
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
        $this->container['_links'] = $data['_links'] ?? null;
        $this->container['_embedded'] = $data['_embedded'] ?? null;
        $this->container['payload'] = $data['payload'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
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
     * Gets _links
     *
     * @return \SellingPartnerApi\Model\MessagingV1\GetMessagingActionResponseLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \SellingPartnerApi\Model\MessagingV1\GetMessagingActionResponseLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }
    /**
     * Gets _embedded
     *
     * @return \SellingPartnerApi\Model\MessagingV1\GetMessagingActionResponseEmbedded|null
     */
    public function getEmbedded()
    {
        return $this->container['_embedded'];
    }

    /**
     * Sets _embedded
     *
     * @param \SellingPartnerApi\Model\MessagingV1\GetMessagingActionResponseEmbedded|null $_embedded _embedded
     *
     * @return self
     */
    public function setEmbedded($_embedded)
    {
        $this->container['_embedded'] = $_embedded;

        return $this;
    }
    /**
     * Gets payload
     *
     * @return \SellingPartnerApi\Model\MessagingV1\MessagingAction|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \SellingPartnerApi\Model\MessagingV1\MessagingAction|null $payload payload
     *
     * @return self
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }
    /**
     * Gets errors
     *
     * @return \SellingPartnerApi\Model\MessagingV1\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \SellingPartnerApi\Model\MessagingV1\Error[]|null $errors A list of error responses returned when a request is unsuccessful.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
}

