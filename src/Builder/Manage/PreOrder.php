<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Manage\PreOrder\Id;

/**
 * url: /api/v2/manage/pre-order
 */
final class PreOrder extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): PreOrderGet
    {
        return new PreOrderGet($this->client, $this->getUrl());
    }
}
