<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-document-package/{packageId}/update
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-document-package/{packageId}/update
 */
final class Update extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document-package/{packageId}/update';

    public function put(): UpdatePut
    {
        return new UpdatePut($this->client, $this->getUrl());
    }
}
