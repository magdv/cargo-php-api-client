<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company-confirmation/role
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Requests\RoleSetRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\StatusResponse;

final class RolePut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Установка роли клиента.
     *
     * @return StatusResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(RoleSetRequest $body): StatusResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            StatusResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
