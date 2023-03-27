<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/booking/{externalId}/confirm
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking\ExternalId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Requests\ConfirmInput;
use Cargomart\ApiClient\Entity\Tms\Responses\ReceptionResponse;

final class ConfirmPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение бронирования со стороны TMS
     *
     * @return ReceptionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
