<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/branch
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Company\Branch\Ac;

/**
 * url: /api/v2/company/branch
 */
final class Branch extends AbstractBuilder
{
    protected const URL = '/api/v2/company/branch';

    public function ac(): Ac
    {
        return new Ac($this->params, $this->client);
    }
}
