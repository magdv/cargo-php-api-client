<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для редактирования пункта маршрута
 * source: order/requests/order-patch-point-request.json
 *
 * @property int $id
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toTime
 * @property string $additionalInfo
 */
final class OrderPatchPatchRequest extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'additionalInfo' => false,
    ];
}
