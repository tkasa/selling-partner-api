<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Rate extends BaseDto
{
    /**
     * @param  string  $rateId An identifier for the rate.
     * @param  Currency  $currency The total value of all items in the container.
     * @param  Weight  $weight The weight.
     * @param  string  $expirationTime The time after which the offering will expire.
     * @param  string  $serviceType The type of shipping service that will be used for the service offering.
     * @param  ShippingPromiseSet  $shippingPromiseSet The promised delivery time and pickup time.
     */
    public function __construct(
        public readonly string $rateId,
        public readonly Currency $currency,
        public readonly Weight $weight,
        public readonly string $expirationTime,
        public readonly string $serviceType,
        public readonly ShippingPromiseSet $shippingPromiseSet,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}