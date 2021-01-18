<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Requests\IncomeRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\Status;

class IncomeRequestPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправка запроса на добавление в сотрудники в компанию дубликат.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(IncomeRequest $body): Status
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
