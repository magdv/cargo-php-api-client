<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tracking
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tracking\Count;
use Cargomart\ApiClient\Builder\Tracking\Id;

/**
 * url: /api/v2/tracking
 */
final class Tracking extends AbstractBuilder
{
    protected const URL = '/api/v2/tracking';

    public function count(): Count
    {
        return new Count($this->params, $this->client);
    }

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): TrackingGet
    {
        return new TrackingGet($this->client, $this->getUrl());
    }

    public function post(): TrackingPost
    {
        return new TrackingPost($this->client, $this->getUrl());
    }
}
