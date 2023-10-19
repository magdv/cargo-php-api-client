<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\ExpeditorProposalConsignorExpeditorPaymentRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ExpeditorProposalPaymentResponse;

class ConsignorExpeditorPaymentPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создания или обновления информации об оплате заказчиком счёта экспедитора
     *
     * @return ExpeditorProposalPaymentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ExpeditorProposalConsignorExpeditorPaymentRequest $body): ExpeditorProposalPaymentResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            ExpeditorProposalPaymentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
