<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/carrier-ask
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-ask
 */
final class CarrierAsk extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-ask';

    public function get(): CarrierAskGet
    {
        return new CarrierAskGet($this->client, $this->getUrl());
    }
}
