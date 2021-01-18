<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\PreOrderGroup;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderGroupItem;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение информации о конкретной группе предзаказов.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PreOrderGroupItem
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderGroupItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
