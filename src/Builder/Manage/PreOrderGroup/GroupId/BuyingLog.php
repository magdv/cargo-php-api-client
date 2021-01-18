<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderGroup\GroupId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/manage/pre-order-group/{groupId}/buying-log
 */
final class BuyingLog extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order-group/{groupId}/buying-log';

    public function get(): BuyingLogGet
    {
        return new BuyingLogGet($this->client, $this->getUrl());
    }
}
