<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект пакета документов заказа
 * source: order/OrderDocument/objects/order-document-package.json
 *
 * @property string[] $orderDocuments
 * @property string $id
 * @property int $version
 * @property string $status
 * @property string $rejectReason
 * @property string $orderId
 * @property int $orderSerialId
 * @property string $updateDate
 * @property OrderDocumentPackageAccess $access
 */
final class OrderDocumentPackage extends AbstractEntity
{
    protected static $types = [
        'orderDocuments' => ['array', 'string'],
        'id' => ['string'],
        'version' => ['int'],
        'status' => ['string'],
        'rejectReason' => ['string'],
        'orderId' => ['string'],
        'orderSerialId' => ['int'],
        'updateDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentPackageAccess'],
    ];

    protected static $nullables = [
        'orderDocuments' => false,
        'id' => false,
        'version' => false,
        'status' => false,
        'rejectReason' => false,
        'orderId' => false,
        'orderSerialId' => false,
        'updateDate' => false,
        'access' => false,
    ];
}
