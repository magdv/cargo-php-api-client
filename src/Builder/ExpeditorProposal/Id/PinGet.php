<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalUsersListResponse;

class PinGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список пользователей, пометивших флагом заказ перевозчика.
     *
     * @return ProposalUsersListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProposalUsersListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProposalUsersListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
