<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\PreOrder\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/pre-order/{id}/cancel
 */
final class Cancel extends AbstractBuilder
{
    protected const URL = '/api/v2/pre-order/{id}/cancel';

    public function put(): CancelPut
    {
        return new CancelPut($this->client, $this->getUrl());
    }
}
