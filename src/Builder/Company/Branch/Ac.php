<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Branch;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/branch/ac
 */
final class Ac extends AbstractBuilder
{
    protected const URL = '/api/v2/company/branch/ac';

    public function get(): AcGet
    {
        return new AcGet($this->client, $this->getUrl());
    }
}
