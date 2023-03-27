<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-document-package/{packageId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId\Accept;
use Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId\Document;
use Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId\Moderation;
use Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId\Reject;
use Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId\Update;

/**
 * url: /api/v2/order-document-package/{packageId}
 */
final class PackageId extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document-package/{packageId}';

    public function document(): Document
    {
        return new Document($this->params, $this->client);
    }

    public function update(): Update
    {
        return new Update($this->params, $this->client);
    }

    public function moderation(): Moderation
    {
        return new Moderation($this->params, $this->client);
    }

    public function accept(): Accept
    {
        return new Accept($this->params, $this->client);
    }

    public function reject(): Reject
    {
        return new Reject($this->params, $this->client);
    }

    public function get(): PackageIdGet
    {
        return new PackageIdGet($this->client, $this->getUrl());
    }
}
