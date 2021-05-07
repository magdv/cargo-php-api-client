<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderDocument\DocumentId;

/**
 * url: /api/v2/order-document
 */
final class OrderDocument extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document';

    public function documentId(string $documentId): DocumentId
    {
        $params = $this->params;
        $params['documentId'] = $documentId;
        return new DocumentId($params, $this->client);
    }
}
