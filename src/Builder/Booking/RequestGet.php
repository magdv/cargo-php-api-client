<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Responses\BookingDraftListResponse;

class RequestGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка резервирований
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
