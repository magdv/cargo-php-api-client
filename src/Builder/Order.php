<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\Ac;
use Cargomart\ApiClient\Builder\Order\Broker;
use Cargomart\ApiClient\Builder\Order\CategoryStatistics;
use Cargomart\ApiClient\Builder\Order\Count;
use Cargomart\ApiClient\Builder\Order\Excel;
use Cargomart\ApiClient\Builder\Order\Exists;
use Cargomart\ApiClient\Builder\Order\Id;
use Cargomart\ApiClient\Builder\Order\Ids;
use Cargomart\ApiClient\Builder\Order\Import;
use Cargomart\ApiClient\Builder\Order\OrderId;
use Cargomart\ApiClient\Builder\Order\Publish;

/**
 * url: /api/v2/order
 */
final class Order extends AbstractBuilder
{
    protected const URL = '/api/v2/order';

    public function orderId(string $orderId): OrderId
    {
        $params = $this->params;
        $params['orderId'] = $orderId;
        return new OrderId($params, $this->client);
    }

    public function publish(): Publish
    {
        return new Publish($this->params, $this->client);
    }

    public function broker(): Broker
    {
        return new Broker($this->params, $this->client);
    }

    public function ids(): Ids
    {
        return new Ids($this->params, $this->client);
    }

    public function exists(): Exists
    {
        return new Exists($this->params, $this->client);
    }

    public function count(): Count
    {
        return new Count($this->params, $this->client);
    }

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function categoryStatistics(): CategoryStatistics
    {
        return new CategoryStatistics($this->params, $this->client);
    }

    public function excel(): Excel
    {
        return new Excel($this->params, $this->client);
    }

    public function import(): Import
    {
        return new Import($this->params, $this->client);
    }

    public function ac(): Ac
    {
        return new Ac($this->params, $this->client);
    }

    public function get(): OrderGet
    {
        return new OrderGet($this->client, $this->getUrl());
    }

    public function post(): OrderPost
    {
        return new OrderPost($this->client, $this->getUrl());
    }
}
