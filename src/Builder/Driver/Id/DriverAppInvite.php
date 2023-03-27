<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/driver/{id}/driver-app-invite
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Driver\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/driver/{id}/driver-app-invite
 */
final class DriverAppInvite extends AbstractBuilder
{
    protected const URL = '/api/v2/driver/{id}/driver-app-invite';

    public function post(): DriverAppInvitePost
    {
        return new DriverAppInvitePost($this->client, $this->getUrl());
    }
}
