<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/file/clear
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\File;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/file/clear
 */
final class Clear extends AbstractBuilder
{
    protected const URL = '/api/v2/file/clear';

    public function delete(): ClearDelete
    {
        return new ClearDelete($this->client, $this->getUrl());
    }
}
