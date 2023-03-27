<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/refuse
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/refuse
 */
final class Refuse extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/refuse';

    public function post(): RefusePost
    {
        return new RefusePost($this->client, $this->getUrl());
    }
}
