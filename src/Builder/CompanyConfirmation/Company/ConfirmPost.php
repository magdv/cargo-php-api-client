<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation\Company;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\StatusResponse;

class ConfirmPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение данных компании.
     *
     * @return StatusResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): StatusResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            StatusResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
