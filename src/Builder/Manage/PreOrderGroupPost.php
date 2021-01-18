<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Requests\PreOrderGroupUpdateRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupResponse;

class PreOrderGroupPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание группы предзаказа
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(PreOrderGroupUpdateRequest $body): PreOrderGroupResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            PreOrderGroupResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
