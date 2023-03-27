<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/roadmap/{roadmapId}/hide
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Roadmap\RoadmapId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/roadmap/{roadmapId}/hide
 */
final class Hide extends AbstractBuilder
{
    protected const URL = '/api/v2/roadmap/{roadmapId}/hide';

    public function post(): HidePost
    {
        return new HidePost($this->client, $this->getUrl());
    }
}
