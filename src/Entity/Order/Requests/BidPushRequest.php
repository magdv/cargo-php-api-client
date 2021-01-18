<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Попытка поставить данные на заказ
 * source: order/requests/bid-push-request.json
 *
 * @property string $value
 */
final class BidPushRequest extends AbstractEntity
{
    protected static $types = ['value' => ['string']];
    protected static $nullables = ['value' => false];
}
