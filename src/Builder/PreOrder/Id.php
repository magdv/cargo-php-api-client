<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\PreOrder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\PreOrder\Id\Cancel;

/**
 * url: /api/v2/pre-order/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/pre-order/{id}';

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}
