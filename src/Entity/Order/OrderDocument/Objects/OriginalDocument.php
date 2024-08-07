<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус документа по заказу, отправленного экспедитору
 * source: order/OrderDocument/objects/original-document.json
 *
 * @property string $status
 * @property string $reason
 * @property string $trackingNumber
 * @property string $postServiceName
 */
final class OriginalDocument extends AbstractEntity
{
    protected static $types = [
        'status' => ['string'],
        'reason' => ['string'],
        'trackingNumber' => ['string'],
        'postServiceName' => ['string'],
    ];

    protected static $nullables = [
        'status' => false,
        'reason' => false,
        'trackingNumber' => false,
        'postServiceName' => false,
    ];
}
