<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\TenderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tender/request/{tenderId}/results
 */
final class Results extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/{tenderId}/results';

    public function get(): ResultsGet
    {
        return new ResultsGet($this->client, $this->getUrl());
    }
}
