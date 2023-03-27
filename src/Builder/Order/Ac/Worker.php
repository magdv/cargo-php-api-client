<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/ac/worker
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/ac/worker
 */
final class Worker extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ac/worker';

    public function get(): WorkerGet
    {
        return new WorkerGet($this->client, $this->getUrl());
    }
}
