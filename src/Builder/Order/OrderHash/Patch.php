<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderHash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderHash}/patch
 */
final class Patch extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderHash}/patch';

    public function post(): PatchPost
    {
        return new PatchPost($this->client, $this->getUrl());
    }
}
