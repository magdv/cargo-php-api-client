<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-confirmation/income-request
 */
final class IncomeRequest extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/income-request';

    public function post(): IncomeRequestPost
    {
        return new IncomeRequestPost($this->client, $this->getUrl());
    }
}
