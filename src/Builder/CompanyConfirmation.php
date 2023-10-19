<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\CompanyConfirmation\Company;
use Cargomart\ApiClient\Builder\CompanyConfirmation\CompanyProfileSend;
use Cargomart\ApiClient\Builder\CompanyConfirmation\Document;
use Cargomart\ApiClient\Builder\CompanyConfirmation\IncomeRequest;
use Cargomart\ApiClient\Builder\CompanyConfirmation\Role;
use Cargomart\ApiClient\Builder\CompanyConfirmation\Validation;

/**
 * url: /api/v2/company-confirmation
 */
final class CompanyConfirmation extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation';

    public function validation(): Validation
    {
        return new Validation($this->params, $this->client);
    }

    public function role(): Role
    {
        return new Role($this->params, $this->client);
    }

    public function company(): Company
    {
        return new Company($this->params, $this->client);
    }

    public function document(): Document
    {
        return new Document($this->params, $this->client);
    }

    public function incomeRequest(): IncomeRequest
    {
        return new IncomeRequest($this->params, $this->client);
    }

    public function companyProfileSend(): CompanyProfileSend
    {
        return new CompanyProfileSend($this->params, $this->client);
    }

    public function get(): CompanyConfirmationGet
    {
        return new CompanyConfirmationGet($this->client, $this->getUrl());
    }
}
