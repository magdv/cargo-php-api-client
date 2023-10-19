<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanySettingsResponse;

class SettingsGet extends AbstractRequest
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
