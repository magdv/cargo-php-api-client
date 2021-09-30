<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\Id\Patch;

/**
 * url: /api/v2/order/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{id}';

    public function patch(): Patch
    {
        return new Patch($this->params, $this->client);
    }
}
