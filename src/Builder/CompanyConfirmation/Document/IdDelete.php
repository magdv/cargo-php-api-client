<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company-confirmation/document/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation\Document;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\StatusResponse;

final class IdDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Удаление документа.
     *
     * @return StatusResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): StatusResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            StatusResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
