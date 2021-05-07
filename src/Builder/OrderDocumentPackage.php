<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

/**
 * url: /api/v2/order-document-package
 */
final class OrderDocumentPackage extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document-package';

    public function packageId(string $packageId): PackageId
    {
        $params = $this->params;
        $params['packageId'] = $packageId;
        return new PackageId($params, $this->client);
    }
}
