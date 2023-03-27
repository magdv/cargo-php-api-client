<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/booking/request
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Requests\BookingCreateRequest;
use Cargomart\ApiClient\Entity\Tms\Responses\BookingDraftResponse;

final class RequestPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание резервирования на машину
     *
     * @return BookingDraftResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(BookingCreateRequest $body): BookingDraftResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            BookingDraftResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
