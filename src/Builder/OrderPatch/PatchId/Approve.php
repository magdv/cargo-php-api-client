<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-patch/{patchId}/approve
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderPatch\PatchId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-patch/{patchId}/approve
 */
final class Approve extends AbstractBuilder
{
    protected const URL = '/api/v2/order-patch/{patchId}/approve';

    public function post(): ApprovePost
    {
        return new ApprovePost($this->client, $this->getUrl());
    }
}
