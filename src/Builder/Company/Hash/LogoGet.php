<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class LogoGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получения логотипа оранизации.
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
     * размер изображения - 90x50, 45x45, 80x80 60x40, 80x40, 80x20, 100x100, 170x170, 200x50, 160x160, 120x50
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qSize(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['size']);
        } else {
            $c->query['size'] = $value;
        }

        return $c;
    }

    /**
     * Для браузера скачать или отдать в просмотр.
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qPreview(?bool $value): self
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
