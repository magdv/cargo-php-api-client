<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DraftDocument\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class PdfGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение печатной формы черновика в формате PDF.
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
     * Флаг инлайн-просмотра (против скачивания).
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPreview(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['preview']);
        } else {
            $c->query['preview'] = $value;
        }

        return $c;
    }
}
