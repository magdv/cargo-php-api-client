<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/refuse-revert-patch
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/refuse-revert-patch
 */
final class RefuseRevertPatch extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/refuse-revert-patch';

    public function post(): RefuseRevertPatchPost
    {
        return new RefuseRevertPatchPost($this->client, $this->getUrl());
    }
}
