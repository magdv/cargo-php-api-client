<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Requests\CompanyCreate;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\Status;

class CompanyPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Установка начальных данных компании.
     *
     * @return Status
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CompanyCreate $body): Status
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            Status::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
