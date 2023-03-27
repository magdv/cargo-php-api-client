<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-create-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на создание заказа
 * source: order/requests/order-create-request.json
 *
 * @property string $kind
 * @property bool $isGeneralPartner
 * @property string $date
 * @property int $truckTypeId
 */
final class OrderCreateRequest extends AbstractEntity
{
    protected static $types = [
        'kind' => ['string'],
        'isGeneralPartner' => ['bool'],
        'date' => ['string'],
        'truckTypeId' => ['int'],
    ];

    protected static $nullables = ['kind' => false, 'isGeneralPartner' => false, 'date' => false, 'truckTypeId' => false];
}
