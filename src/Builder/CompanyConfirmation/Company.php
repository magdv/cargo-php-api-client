<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company-confirmation/company
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\CompanyConfirmation\Company\Confirm;

/**
 * url: /api/v2/company-confirmation/company
 */
final class Company extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/company';

    public function confirm(): Confirm
    {
        return new Confirm($this->params, $this->client);
    }

    public function post(): CompanyPost
    {
        return new CompanyPost($this->client, $this->getUrl());
    }

    public function put(): CompanyPut
    {
        return new CompanyPut($this->client, $this->getUrl());
    }

    public function delete(): CompanyDelete
    {
        return new CompanyDelete($this->client, $this->getUrl());
    }
}
