<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/roadmap
 */
final class Roadmap extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/roadmap';

    public function get(): RoadmapGet
    {
        return new RoadmapGet($this->client, $this->getUrl());
    }
}
