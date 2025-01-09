<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\SimpleDocument;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/simple-document/preview
 */
final class Preview extends AbstractBuilder
{
    protected const URL = '/api/v2/simple-document/preview';

    public function get(): PreviewGet
    {
        return new PreviewGet($this->client, $this->getUrl());
    }
}
