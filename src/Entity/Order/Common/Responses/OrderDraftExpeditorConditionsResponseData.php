<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorConditions;

/**
 * Данные условий перевозки
 * source: order/Common/responses/order-draft-expeditor-conditions-response.json#/properties/data
 *
 * @property OrderDraftExpeditorConditions $conditions
 */
final class OrderDraftExpeditorConditionsResponseData extends AbstractEntity
{
    protected static $types = [
        'conditions' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorConditions'],
    ];

    protected static $nullables = ['conditions' => false];
}
