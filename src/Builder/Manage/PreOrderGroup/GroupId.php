<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderGroup;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Manage\PreOrderGroup\GroupId\BuyingLog;
use Cargomart\ApiClient\Builder\Manage\PreOrderGroup\GroupId\ChangingLog;

/**
 * url: /api/v2/manage/pre-order-group/{groupId}
 */
final class GroupId extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order-group/{groupId}';

    public function buyingLog(): BuyingLog
    {
        return new BuyingLog($this->params, $this->client);
    }

    public function changingLog(): ChangingLog
    {
        return new ChangingLog($this->params, $this->client);
    }

    public function get(): GroupIdGet
    {
        return new GroupIdGet($this->client, $this->getUrl());
    }

    public function put(): GroupIdPut
    {
        return new GroupIdPut($this->client, $this->getUrl());
    }
}
