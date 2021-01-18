<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\PreOrder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderItem;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение конкретного предзаказа.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PreOrderItem
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
