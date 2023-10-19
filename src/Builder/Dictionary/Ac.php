<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Dictionary;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Dictionary\Ac\ContainerType;
use Cargomart\ApiClient\Builder\Dictionary\Ac\Country;

/**
 * url: /api/v2/dictionary/ac
 */
final class Ac extends AbstractBuilder
{
    protected const URL = '/api/v2/dictionary/ac';

    public function containerType(): ContainerType
    {
        return new ContainerType($this->params, $this->client);
    }

    public function country(): Country
    {
        return new Country($this->params, $this->client);
    }
}
