<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/truck/{id}/activation
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Truck\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/truck/{id}/activation
 */
final class Activation extends AbstractBuilder
{
    protected const URL = '/api/v2/truck/{id}/activation';

    public function post(): ActivationPost
    {
        return new ActivationPost($this->client, $this->getUrl());
    }

    public function delete(): ActivationDelete
    {
        return new ActivationDelete($this->client, $this->getUrl());
    }
}
