<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/refuse-carrier
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/refuse-carrier
 */
final class RefuseCarrier extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/refuse-carrier';

    public function post(): RefuseCarrierPost
    {
        return new RefuseCarrierPost($this->client, $this->getUrl());
    }
}
