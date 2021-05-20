<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\TrackingEdit;
use Cargomart\ApiClient\Entity\Order\Responses\TrackingItem;

class TrackingPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового отслеживания.
     *
     * @return TrackingItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(TrackingEdit $body): TrackingItem
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            TrackingItem::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
