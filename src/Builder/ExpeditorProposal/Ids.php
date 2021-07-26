<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/ids
 */
final class Ids extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/ids';

    public function get(): IdsGet
    {
        return new IdsGet($this->client, $this->getUrl());
    }
}
