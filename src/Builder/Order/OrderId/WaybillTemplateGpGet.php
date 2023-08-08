<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\FileLinkResponse;

class WaybillTemplateGpGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Скачать транспортную накладную (подготовить ссылку на скачивание) для ГП
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

    /**
     * Индексы точек погрузки, которые указать в ТН, 2-шт
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qPointIndex(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['pointIndex']);
        } else {
            $c->query['pointIndex'] = $value;
        }

        return $c;
    }
}
