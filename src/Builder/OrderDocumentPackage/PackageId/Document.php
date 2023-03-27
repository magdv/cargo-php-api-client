<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-document-package/{packageId}/document
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-document-package/{packageId}/document
 */
final class Document extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document-package/{packageId}/document';

    public function post(): DocumentPost
    {
        return new DocumentPost($this->client, $this->getUrl());
    }
}
