<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/pin
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/pin
 */
final class Pin extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/pin';

    public function get(): PinGet
    {
        return new PinGet($this->client, $this->getUrl());
    }
}
