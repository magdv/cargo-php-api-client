<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-document-package-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDocument;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDocumentPackage;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDocumentType;

/**
 * source: order/responses/order-document-package-response.json#/properties/data
 *
 * @property OrderDocumentPackage $documentPackage
 * @property OrderDocument[] $orderDocuments
 * @property OrderDocumentType[] $orderDocumentType
 */
final class OrderDocumentPackageResponseData extends AbstractEntity
{
    protected static $types = [
        'documentPackage' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDocumentPackage'],
        'orderDocuments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDocument'],
        'orderDocumentType' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDocumentType'],
    ];

    protected static $nullables = ['documentPackage' => false, 'orderDocuments' => false, 'orderDocumentType' => false];
}
