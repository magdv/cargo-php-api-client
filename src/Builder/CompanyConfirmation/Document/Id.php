<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company-confirmation/document/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation\Document;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-confirmation/document/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/document/{id}';

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}
