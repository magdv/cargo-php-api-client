<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocument;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentPackage;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentType;

/**
 * source: order/OrderDocument/responses/order-document-package-response.json#/properties/data
 *
 * @property OrderDocumentPackage $documentPackage
 * @property OrderDocument[] $orderDocuments
 * @property OrderDocumentType[] $orderDocumentType
 */
final class OrderDocumentPackageResponseData extends AbstractEntity
{
    protected static $types = [
        'documentPackage' => ['Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentPackage'],
        'orderDocuments' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocument'],
        'orderDocumentType' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentType'],
    ];

    protected static $nullables = ['documentPackage' => false, 'orderDocuments' => false, 'orderDocumentType' => false];
}
