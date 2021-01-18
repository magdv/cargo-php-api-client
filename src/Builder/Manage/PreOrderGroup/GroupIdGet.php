<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderGroup;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupResponse;

class GroupIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение группы предзаказов
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PreOrderGroupResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderGroupResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
