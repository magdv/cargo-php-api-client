<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanySettings;

class SettingsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение настроек своей компании.
     *
     * @return CompanySettings
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanySettings
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanySettings::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
