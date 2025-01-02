<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\SimpleDocument;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class PreviewGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Превью PDF-файла для титула ЭДО-документа перед подписанием им.
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Запрос на создание превью.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qQ(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['q']);
        } else {
            $c->query['q'] = $value;
        }

        return $c;
    }
}
