<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\ProposalPaymentRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalPaymentResponse;

class CarrierPaymentPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание или обновление информации о платеже перевозчику.
     *
     * @return ProposalPaymentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ProposalPaymentRequest $body): ProposalPaymentResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            ProposalPaymentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
