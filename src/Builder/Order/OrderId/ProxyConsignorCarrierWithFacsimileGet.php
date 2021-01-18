<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\FileLinkResponse;

class ProxyConsignorCarrierWithFacsimileGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Скачать доверенность на заказ для заказчика с факсимиле.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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

    /**
     * Cформировать доверенность на самовывоз с факсимиле с заполненными добавочными данными
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qWithAdditional(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['withAdditional']);
        } else {
            $c->query['withAdditional'] = $value;
        }

        return $c;
    }
}
