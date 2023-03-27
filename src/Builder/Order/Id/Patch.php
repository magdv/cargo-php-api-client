<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{id}/patch
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{id}/patch
 */
final class Patch extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{id}/patch';

    public function post(): PatchPost
    {
        return new PatchPost($this->client, $this->getUrl());
    }
}
