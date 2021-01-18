<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Requests\BookingCreateRequest;
use Cargomart\ApiClient\Entity\Tms\Responses\BookingDraftResponse;

class RequestPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание резервирования на машину
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
