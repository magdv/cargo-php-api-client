<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/tracking/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\TrackingEdit;
use Cargomart\ApiClient\Entity\Order\Responses\TrackingItem;

final class IdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование конкретного отслеживания.
     *
     * @return TrackingItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(TrackingEdit $body): TrackingItem
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            TrackingItem::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
