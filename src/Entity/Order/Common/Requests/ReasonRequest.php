<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на отказ от заказа
 * source: order/Common/requests/reason-request.json
 *
 * @property string $reasonCode
 * @property string $comment
 */
final class ReasonRequest extends AbstractEntity
{
    protected static $types = ['reasonCode' => ['string'], 'comment' => ['string']];
    protected static $nullables = ['reasonCode' => false, 'comment' => false];
}
