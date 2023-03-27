<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/tms/reception
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tms;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Requests\TmsInput;
use Cargomart\ApiClient\Entity\Tms\Responses\ReceptionResponse;

final class ReceptionPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Принятие данных о свободных машинах от TMS
     *
     * @return ReceptionResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(TmsInput $body): ReceptionResponse
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
