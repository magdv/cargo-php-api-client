<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/settings
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanySettingsResponse;

final class SettingsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение настроек компании.
     *
     * @return CompanySettingsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanySettingsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanySettingsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
