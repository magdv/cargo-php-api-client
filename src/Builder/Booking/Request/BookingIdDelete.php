<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking\Request;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\MessageResponse;

class BookingIdDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отмена резервирования, перевод в статус ручной отмены
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): MessageResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            MessageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
