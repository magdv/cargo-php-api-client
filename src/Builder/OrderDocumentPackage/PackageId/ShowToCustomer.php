<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-document-package/{packageId}/show-to-customer
 */
final class ShowToCustomer extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document-package/{packageId}/show-to-customer';

    public function post(): ShowToCustomerPost
    {
        return new ShowToCustomerPost($this->client, $this->getUrl());
    }
}
