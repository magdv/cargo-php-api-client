<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/booking/request/{bookingId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking\Request;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Responses\BookingDraftResponse;

final class BookingIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение данных резервирования
     *
     * @return BookingDraftResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BookingDraftResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            BookingDraftResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
