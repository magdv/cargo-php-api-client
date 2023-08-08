<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\TrackingItem;

class ActiveDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Деактивация фильтра отслеживания.
     *
     * @return TrackingItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TrackingItem
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            TrackingItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
