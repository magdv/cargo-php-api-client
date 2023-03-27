<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user/recovery
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\User\Recovery\Id;

/**
 * url: /api/v2/user/recovery
 */
final class Recovery extends AbstractBuilder
{
    protected const URL = '/api/v2/user/recovery';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function post(): RecoveryPost
    {
        return new RecoveryPost($this->client, $this->getUrl());
    }
}
