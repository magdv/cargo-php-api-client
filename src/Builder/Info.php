<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Info\Id;

/**
 * url: /api/v2/info
 */
final class Info extends AbstractBuilder
{
    protected const URL = '/api/v2/info';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): InfoGet
    {
        return new InfoGet($this->client, $this->getUrl());
    }
}
