<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\DriverApp\Detail;
use Cargomart\ApiClient\Builder\DriverApp\Invite;

/**
 * url: /api/v2/driver-app
 */
final class DriverApp extends AbstractBuilder
{
    protected const URL = '/api/v2/driver-app';

    public function detail(): Detail
    {
        return new Detail($this->params, $this->client);
    }

    public function invite(): Invite
    {
        return new Invite($this->params, $this->client);
    }
}
