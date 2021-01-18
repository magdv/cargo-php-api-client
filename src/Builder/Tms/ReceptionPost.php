<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tms;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tms\Requests\TmsInput;
use Cargomart\ApiClient\Entity\Tms\Responses\AvailabilityListResponse;

class ReceptionPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Принятие данных о свободных машинах от TMS
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(TmsInput $body): AvailabilityListResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            AvailabilityListResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
