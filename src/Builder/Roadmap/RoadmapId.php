<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/roadmap/{roadmapId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Roadmap;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Roadmap\RoadmapId\Hide;

/**
 * url: /api/v2/roadmap/{roadmapId}
 */
final class RoadmapId extends AbstractBuilder
{
    protected const URL = '/api/v2/roadmap/{roadmapId}';

    public function hide(): Hide
    {
        return new Hide($this->params, $this->client);
    }
}
