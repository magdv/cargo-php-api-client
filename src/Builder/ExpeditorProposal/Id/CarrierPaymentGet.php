<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/carrier-payment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalPaymentResponse;

final class CarrierPaymentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получения списка оплат
     *
     * @return ProposalPaymentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProposalPaymentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProposalPaymentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
