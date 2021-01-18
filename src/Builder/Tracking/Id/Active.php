<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tracking/{id}/active
 */
final class Active extends AbstractBuilder
{
    protected const URL = '/api/v2/tracking/{id}/active';

    public function post(): ActivePost
    {
        return new ActivePost($this->client, $this->getUrl());
    }

    public function delete(): ActiveDelete
    {
        return new ActiveDelete($this->client, $this->getUrl());
    }
}
