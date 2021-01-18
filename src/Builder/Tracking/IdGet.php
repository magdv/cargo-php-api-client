<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\TrackingItem;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных конкретного отслеживания.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): TrackingItem
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TrackingItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Фильтр with - locality
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qWith(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['with']);
        } else {
            $c->query['with'] = $value;
        }

        return $c;
    }
}
