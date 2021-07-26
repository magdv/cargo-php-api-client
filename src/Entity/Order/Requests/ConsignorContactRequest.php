<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на изменение кураторов заказчика у заказа
 * source: order/requests/consignor-contact-request.json
 *
 * @property int[] $consignorContactIds
 */
final class ConsignorContactRequest extends AbstractEntity
{
    protected static $types = ['consignorContactIds' => ['array', 'int']];
    protected static $nullables = ['consignorContactIds' => false];
}
