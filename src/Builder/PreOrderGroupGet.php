<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderGroupList;

class PreOrderGroupGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка сгруппированных предзаказов.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PreOrderGroupList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderGroupList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
