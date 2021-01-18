<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Requests\CompanyUpdate;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\Status;

class CompanyPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Доработка данных компании (СНО, флаг декларации).
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(CompanyUpdate $body): Status
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            Status::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
