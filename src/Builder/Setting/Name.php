<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/setting/{name}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Setting;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/setting/{name}
 */
final class Name extends AbstractBuilder
{
    protected const URL = '/api/v2/setting/{name}';

    public function patch(): NamePatch
    {
        return new NamePatch($this->client, $this->getUrl());
    }
}
