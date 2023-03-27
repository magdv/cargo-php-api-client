<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/check-digital-ecn-access
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEcnCheckAccessResponse;

final class CheckDigitalEcnAccessGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Проверка доступа к созданию Электронной ТРН.
     *
     * @return OrderEcnCheckAccessResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderEcnCheckAccessResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderEcnCheckAccessResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Индекс пункта погрузки из маршрута.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPointIndexFrom(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['pointIndexFrom']);
        } else {
            $c->query['pointIndexFrom'] = $value;
        }

        return $c;
    }

    /**
     * Индекс пункта выгрузки из маршрута.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPointIndexTo(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['pointIndexTo']);
        } else {
            $c->query['pointIndexTo'] = $value;
        }

        return $c;
    }
}
