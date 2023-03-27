<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company-confirmation/company-profile-send
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Requests\CompanyProfileRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\StatusResponse;

final class CompanyProfileSendPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправить анкету, перейти к следующему шагу
     *
     * @return StatusResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CompanyProfileRequest $body): StatusResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            StatusResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
