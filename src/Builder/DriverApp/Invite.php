<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DriverApp;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/driver-app/invite
 */
final class Invite extends AbstractBuilder
{
    protected const URL = '/api/v2/driver-app/invite';

    public function post(): InvitePost
    {
        return new InvitePost($this->client, $this->getUrl());
    }
}
