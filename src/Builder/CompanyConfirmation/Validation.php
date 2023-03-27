<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company-confirmation/validation
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-confirmation/validation
 */
final class Validation extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/validation';

    public function get(): ValidationGet
    {
        return new ValidationGet($this->client, $this->getUrl());
    }
}
