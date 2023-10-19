<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Dictionary\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/dictionary/ac/container-type
 */
final class ContainerType extends AbstractBuilder
{
    protected const URL = '/api/v2/dictionary/ac/container-type';

    public function get(): ContainerTypeGet
    {
        return new ContainerTypeGet($this->client, $this->getUrl());
    }
}
