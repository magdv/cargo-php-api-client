<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Manage\PreOrderTemplate\Id;

/**
 * url: /api/v2/manage/pre-order-template
 */
final class PreOrderTemplate extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order-template';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }
}
