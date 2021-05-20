<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderGroup;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Requests\PreOrderGroupUpdateRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupResponse;

class GroupIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Сохранение группы предзаказов
     *
     * @return PreOrderGroupResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PreOrderGroupUpdateRequest $body): PreOrderGroupResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            PreOrderGroupResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
