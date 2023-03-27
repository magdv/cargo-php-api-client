<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-document-package.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект пакета документов заказа
 * source: order/objects/order-document-package.json
 *
 * @property string $id
 * @property int $version
 * @property string $status
 * @property string $rejectReason
 * @property string $orderId
 * @property int $orderSerialId
 * @property string[] $orderDocuments
 * @property string $updateDate
 * @property OrderDocumentPackageAccess $access
 */
final class OrderDocumentPackage extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'version' => ['int'],
        'status' => ['string'],
        'rejectReason' => ['string'],
        'orderId' => ['string'],
        'orderSerialId' => ['int'],
        'orderDocuments' => ['array', 'string'],
        'updateDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDocumentPackageAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'version' => false,
        'status' => false,
        'rejectReason' => false,
        'orderId' => false,
        'orderSerialId' => false,
        'orderDocuments' => false,
        'updateDate' => false,
        'access' => false,
    ];
}
