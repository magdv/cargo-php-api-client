<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self/settings
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanySettingsResponse;

final class SettingsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение настроек своей компании.
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
