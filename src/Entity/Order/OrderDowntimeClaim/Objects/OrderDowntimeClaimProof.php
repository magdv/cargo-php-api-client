<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocument;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentPackageAccess;

/**
 * Подтверждение факта простоя для претензии о простое по заявке
 * source: order/OrderDowntimeClaim/objects/OrderDowntimeClaim.json#/properties/proof
 *
 * @property OrderDocument[] $orderDocuments
 * @property string $id
 * @property int $version
 * @property string $status
 * @property string $rejectReason
 * @property string $orderId
 * @property int $orderSerialId
 * @property string $updateDate
 * @property OrderDocumentPackageAccess $access
 */
final class OrderDowntimeClaimProof extends AbstractEntity
{
    protected static $types = [
        'orderDocuments' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocument'],
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
