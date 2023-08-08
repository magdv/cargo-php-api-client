<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на изменение кураторов перевозчика у заказа
 * source: order/requests/carrier-contact-request.json
 *
 * @property int[] $carrierContactIds
 */
final class CarrierContactRequest extends AbstractEntity
{
    protected static $types = ['carrierContactIds' => ['array', 'int']];
    protected static $nullables = ['carrierContactIds' => false];
}
