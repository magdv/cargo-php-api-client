<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company-confirmation/company-profile-send
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-confirmation/company-profile-send
 */
final class CompanyProfileSend extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/company-profile-send';

    public function post(): CompanyProfileSendPost
    {
        return new CompanyProfileSendPost($this->client, $this->getUrl());
    }
}
