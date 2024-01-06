<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\ListAllFulfillmentOrdersResponse;

/**
 * listAllFulfillmentOrders
 */
class ListAllFulfillmentOrders extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?string  $queryStartDate A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order.
     * @param  ?string  $nextToken A string token returned in the response to your previous request.
     */
    public function __construct(
        protected ?string $queryStartDate = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['QueryStartDate' => $this->queryStartDate, 'NextToken' => $this->nextToken]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/outbound/2020-07-01/fulfillmentOrders';
    }

    public function createDtoFromResponse(Response $response): ListAllFulfillmentOrdersResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => ListAllFulfillmentOrdersResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}