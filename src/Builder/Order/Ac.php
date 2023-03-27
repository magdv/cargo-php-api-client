<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/ac
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\Ac\Company;
use Cargomart\ApiClient\Builder\Order\Ac\Curator;
use Cargomart\ApiClient\Builder\Order\Ac\Driver;
use Cargomart\ApiClient\Builder\Order\Ac\DriverName;
use Cargomart\ApiClient\Builder\Order\Ac\PointContacts;
use Cargomart\ApiClient\Builder\Order\Ac\Tag;
use Cargomart\ApiClient\Builder\Order\Ac\Worker;

/**
 * url: /api/v2/order/ac
 */
final class Ac extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ac';

    public function pointContacts(): PointContacts
    {
        return new PointContacts($this->params, $this->client);
    }

    public function company(): Company
    {
        return new Company($this->params, $this->client);
    }

    public function tag(): Tag
    {
        return new Tag($this->params, $this->client);
    }

    public function driver(): Driver
    {
        return new Driver($this->params, $this->client);
    }

    public function driverName(): DriverName
    {
        return new DriverName($this->params, $this->client);
    }

    public function curator(): Curator
    {
        return new Curator($this->params, $this->client);
    }

    public function worker(): Worker
    {
        return new Worker($this->params, $this->client);
    }
}
