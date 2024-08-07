<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания запроса на возвращение Отправителем в работу заявки Экспедитора с победителем после отказа
 * source: order/OrderPatch/requests/order-refuse-revert-patch-request.json
 *
 * @property string $commentForCarrier
 */
final class OrderRefuseRevertPatchRequest extends AbstractEntity
{
    protected static $types = ['commentForCarrier' => ['string']];
    protected static $nullables = ['commentForCarrier' => false];
}
