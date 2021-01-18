<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Manage\PreOrderGroup\GroupId;

/**
 * url: /api/v2/manage/pre-order-group
 */
final class PreOrderGroup extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order-group';

    public function groupId(int $groupId): GroupId
    {
        $params = $this->params;
        $params['groupId'] = $groupId;
        return new GroupId($params, $this->client);
    }

    public function get(): PreOrderGroupGet
    {
        return new PreOrderGroupGet($this->client, $this->getUrl());
    }

    public function post(): PreOrderGroupPost
    {
        return new PreOrderGroupPost($this->client, $this->getUrl());
    }
}
