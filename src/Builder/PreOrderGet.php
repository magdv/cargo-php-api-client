<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderList;

class PreOrderGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка предзаказов.
     *
     * @return PreOrderList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PreOrderList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
