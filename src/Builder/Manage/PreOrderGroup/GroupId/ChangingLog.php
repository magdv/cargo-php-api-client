<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderGroup\GroupId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/manage/pre-order-group/{groupId}/changing-log
 */
final class ChangingLog extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order-group/{groupId}/changing-log';

    public function get(): ChangingLogGet
    {
        return new ChangingLogGet($this->client, $this->getUrl());
    }
}
