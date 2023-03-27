<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-document-package/{packageId}/moderation
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-document-package/{packageId}/moderation
 */
final class Moderation extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document-package/{packageId}/moderation';

    public function post(): ModerationPost
    {
        return new ModerationPost($this->client, $this->getUrl());
    }
}
