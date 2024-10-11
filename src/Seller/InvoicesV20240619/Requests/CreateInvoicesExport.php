<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\InvoicesV20240619\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\InvoicesV20240619\Dto\ExportInvoicesRequest;
use SellingPartnerApi\Seller\InvoicesV20240619\Responses\ErrorList;
use SellingPartnerApi\Seller\InvoicesV20240619\Responses\ExportInvoicesResponse;

/**
 * createInvoicesExport
 */
class CreateInvoicesExport extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  ExportInvoicesRequest  $exportInvoicesRequest  The information required to create the export request.
     */
    public function __construct(
        public ExportInvoicesRequest $exportInvoicesRequest,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/tax/invoices/2024-06-19/exports';
    }

    public function createDtoFromResponse(Response $response): ExportInvoicesResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => ExportInvoicesResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->exportInvoicesRequest->toArray();
    }
}