<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation\Document;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-confirmation/document/send
 */
final class Send extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/document/send';

    public function post(): SendPost
    {
        return new SendPost($this->client, $this->getUrl());
    }
}
