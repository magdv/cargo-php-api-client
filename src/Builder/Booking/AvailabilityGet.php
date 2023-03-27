<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/booking/availability
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Responses\AvailabilityListResponse;

final class AvailabilityGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных машинах от TMS по городу и типу кузова
     *
     * @return AvailabilityListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): AvailabilityListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            AvailabilityListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Город отправки
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
     * Город назначения
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
     * Тип кузова (пока два варианта - рефрежератор и изотерм)
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
