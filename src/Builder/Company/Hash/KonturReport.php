<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/kontur-report
 */
final class KonturReport extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/kontur-report';

    public function get(): KonturReportGet
    {
        return new KonturReportGet($this->client, $this->getUrl());
    }
}
