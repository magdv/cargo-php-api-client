<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Requests\CompanyProfileRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\Status;

class CompanyProfileSendPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправить анкету, перейти к следующему шагу
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(CompanyProfileRequest $body): Status
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
