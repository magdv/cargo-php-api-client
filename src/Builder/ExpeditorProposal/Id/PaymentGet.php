<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/payment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ExpeditorProposalPaymentResponse;

final class PaymentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список оплат по счёту
     *
     * @return ExpeditorProposalPaymentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExpeditorProposalPaymentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ExpeditorProposalPaymentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
