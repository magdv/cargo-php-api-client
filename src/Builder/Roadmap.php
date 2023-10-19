<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Roadmap\RoadmapId;

/**
 * url: /api/v2/roadmap
 */
final class Roadmap extends AbstractBuilder
{
    protected const URL = '/api/v2/roadmap';

    public function roadmapId(string $roadmapId): RoadmapId
    {
        $params = $this->params;
        $params['roadmapId'] = $roadmapId;
        return new RoadmapId($params, $this->client);
    }
}
