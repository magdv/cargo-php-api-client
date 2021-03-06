<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\Status;

class CompanyDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Откат к шагу ввода ИНН.
     *
     * @return Status
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): Status
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            Status::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
