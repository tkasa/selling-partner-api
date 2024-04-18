<?php
/**
 * Address
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description The address.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Address extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'company_name' => 'string',
        'state_or_region' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
        'email' => 'string',
        'phone_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'company_name' => null,
        'state_or_region' => null,
        'city' => null,
        'country_code' => null,
        'postal_code' => null,
        'email' => null,
        'phone_number' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_line3' => 'addressLine3',
        'company_name' => 'companyName',
        'state_or_region' => 'stateOrRegion',
        'city' => 'city',
        'country_code' => 'countryCode',
        'postal_code' => 'postalCode',
        'email' => 'email',
        'phone_number' => 'phoneNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'company_name' => 'setCompanyName',
        'state_or_region' => 'setStateOrRegion',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'company_name' => 'getCompanyName',
        'state_or_region' => 'getStateOrRegion',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['state_or_region'] = $data['state_or_region'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ((mb_strlen($this->container['address_line1']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['address_line1']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_line3']) && (mb_strlen($this->container['address_line3']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line3', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address_line3']) && (mb_strlen($this->container['address_line3']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line3', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['state_or_region'] === null) {
            $invalidProperties[] = "'state_or_region' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 64)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the person, business or institution at the address.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 The first line of the address.
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if ((mb_strlen($address_line1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Address., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($address_line1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }
    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Additional address information, if required.
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (!is_null($address_line2) && (mb_strlen($address_line2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Address., must be smaller than or equal to 60.');
        }
        if (!is_null($address_line2) && (mb_strlen($address_line2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }
    /**
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 Additional address information, if required.
     *
     * @return self
     */
    public function setAddressLine3($address_line3)
    {
        if (!is_null($address_line3) && (mb_strlen($address_line3) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address_line3 when calling Address., must be smaller than or equal to 60.');
        }
        if (!is_null($address_line3) && (mb_strlen($address_line3) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line3 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['address_line3'] = $address_line3;

        return $this;
    }
    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name The name of the business or institution associated with the address.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }
    /**
     * Gets state_or_region
     *
     * @return string
     */
    public function getStateOrRegion()
    {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region
     *
     * @param string $state_or_region The state, county or region where the person, business or institution is located.
     *
     * @return self
     */
    public function setStateOrRegion($state_or_region)
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }
    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city or town where the person, business or institution is located.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }
    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The two digit country code. Follows ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }
    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }
    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address of the contact associated with the address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 64)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be smaller than or equal to 64.');
        }

        $this->container['email'] = $email;

        return $this;
    }
    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The phone number of the person, business or institution located at that address, including the country calling code.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Address., must be smaller than or equal to 20.');
        }
        if (!is_null($phone_number) && (mb_strlen($phone_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }
}


