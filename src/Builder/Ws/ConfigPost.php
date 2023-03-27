<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/ws/config
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Ws;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Ws\Responses\WsConfigResponse;

final class ConfigPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Возвращает конфигурацияю для WS.
     *
     * @return WsConfigResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): WsConfigResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            WsConfigResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
