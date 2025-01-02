<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Common\Responses\ProposalUsersListResponse;

class VisitorGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список пользователей, просмотревших заказ перевозчика.
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
