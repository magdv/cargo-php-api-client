<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderPatch\PatchId;

/**
 * url: /api/v2/order-patch
 */
final class OrderPatch extends AbstractBuilder
{
    protected const URL = '/api/v2/order-patch';

    public function patchId(string $patchId): PatchId
    {
        $params = $this->params;
        $params['patchId'] = $patchId;
        return new PatchId($params, $this->client);
    }
}
