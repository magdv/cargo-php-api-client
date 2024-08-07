<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileV2;

/**
 * Объект документа заказа
 * source: order/OrderDocument/objects/order-document.json
 *
 * @property string $id
 * @property string $name
 * @property string $number
 * @property string $date
 * @property string $type
 * @property string $status
 * @property string $rejectReason
 * @property FileV2[] $files
 * @property int $version
 * @property OrderDocumentAccess $access
 */
final class OrderDocument extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'name' => ['string'],
        'number' => ['string'],
        'date' => ['string'],
        'type' => ['string'],
        'status' => ['string'],
        'rejectReason' => ['string'],
        'files' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileV2'],
        'version' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'number' => false,
        'date' => false,
        'type' => false,
        'status' => false,
        'rejectReason' => false,
        'files' => false,
        'version' => false,
        'access' => false,
    ];
}
