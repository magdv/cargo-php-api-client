<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Configuration\Responses\ConfigurationResponse;

class ConfigurationGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение текущей конфигурации системы
     *
     * @return ConfigurationResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ConfigurationResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ConfigurationResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
