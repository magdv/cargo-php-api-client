<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/predictor/price
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Predictor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Predictor\Responses\PricePredictorResponse;

final class PriceGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Возвращает предсказание цены для маршрута
     *
     * @return PricePredictorResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PricePredictorResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PricePredictorResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Код города отправки
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qDepartureCode(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['departureCode']);
        } else {
            $c->query['departureCode'] = $value;
        }

        return $c;
    }

    /**
     * Код города назначения
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qDestinationCode(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['destinationCode']);
        } else {
            $c->query['destinationCode'] = $value;
        }

        return $c;
    }

    /**
     * Коды городов маршрута
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qPoints(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['points']);
        } else {
            $c->query['points'] = $value;
        }

        return $c;
    }

    /**
     * Код типа кузова (допустимы пока только тент, реф и изотерм)
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qTruckType(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['truckType']);
        } else {
            $c->query['truckType'] = $value;
        }

        return $c;
    }
}
