<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation\Company;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-confirmation/company/confirm
 */
final class Confirm extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/company/confirm';

    public function post(): ConfirmPost
    {
        return new ConfirmPost($this->client, $this->getUrl());
    }

    public function delete(): ConfirmDelete
    {
        return new ConfirmDelete($this->client, $this->getUrl());
    }
}
