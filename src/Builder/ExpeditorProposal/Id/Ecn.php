<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/ecn
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/ecn
 */
final class Ecn extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/ecn';

    public function get(): EcnGet
    {
        return new EcnGet($this->client, $this->getUrl());
    }
}
