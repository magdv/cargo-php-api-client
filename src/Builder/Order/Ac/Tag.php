<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/ac/tag
 */
final class Tag extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ac/tag';

    public function get(): TagGet
    {
        return new TagGet($this->client, $this->getUrl());
    }
}
