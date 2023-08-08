<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderPatch;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderPatch\PatchId\Approve;
use Cargomart\ApiClient\Builder\OrderPatch\PatchId\Cancel;
use Cargomart\ApiClient\Builder\OrderPatch\PatchId\Reject;

/**
 * url: /api/v2/order-patch/{patchId}
 */
final class PatchId extends AbstractBuilder
{
    protected const URL = '/api/v2/order-patch/{patchId}';

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function reject(): Reject
    {
        return new Reject($this->params, $this->client);
    }

    public function approve(): Approve
    {
        return new Approve($this->params, $this->client);
    }

    public function get(): PatchIdGet
    {
        return new PatchIdGet($this->client, $this->getUrl());
    }
}
