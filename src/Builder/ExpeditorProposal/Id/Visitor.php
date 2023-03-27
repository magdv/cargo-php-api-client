<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/visitor
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/visitor
 */
final class Visitor extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/visitor';

    public function get(): VisitorGet
    {
        return new VisitorGet($this->client, $this->getUrl());
    }
}
