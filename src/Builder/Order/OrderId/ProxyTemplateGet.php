<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/proxy-template
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\FileLinkResponse;

final class ProxyTemplateGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Скачать шаблон доверенности.
     *
     * @return FileLinkResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): FileLinkResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            FileLinkResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
