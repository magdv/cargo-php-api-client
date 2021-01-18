<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderTemplate;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/manage/pre-order-template/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order-template/{id}';

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}
