<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking\ExternalId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Requests\ConfirmInput;
use Cargomart\ApiClient\Entity\Tms\Responses\ReceptionResponse;

class ConfirmPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение бронирования со стороны TMS
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(ConfirmInput $body): ReceptionResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ReceptionResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
