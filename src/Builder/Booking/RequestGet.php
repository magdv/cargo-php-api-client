<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/booking/request
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Responses\BookingDraftListResponse;

final class RequestGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка резервирований
     *
     * @return BookingDraftListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BookingDraftListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            BookingDraftListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
