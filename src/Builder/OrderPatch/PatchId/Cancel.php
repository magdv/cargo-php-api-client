<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-patch/{patchId}/cancel
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderPatch\PatchId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-patch/{patchId}/cancel
 */
final class Cancel extends AbstractBuilder
{
    protected const URL = '/api/v2/order-patch/{patchId}/cancel';

    public function post(): CancelPost
    {
        return new CancelPost($this->client, $this->getUrl());
    }
}
