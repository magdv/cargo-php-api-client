<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorConditions;

/**
 * Стоимость маршрута и условия оплаты
 * source: order/responses/order-draft-expeditor-conditions-response.json#/properties/data
 *
 * @property OrderDraftExpeditorConditions $expeditorConditions
 */
final class OrderDraftExpeditorConditionsResponseData extends AbstractEntity
{
    protected static $types = [
        'expeditorConditions' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorConditions'],
    ];

    protected static $nullables = ['expeditorConditions' => false];
}
