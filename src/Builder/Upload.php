<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/upload
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/upload
 */
final class Upload extends AbstractBuilder
{
    protected const URL = '/api/v2/upload';

    public function post(): UploadPost
    {
        return new UploadPost($this->client, $this->getUrl());
    }
}
