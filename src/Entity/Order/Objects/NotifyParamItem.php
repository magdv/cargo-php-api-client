<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Параметр для оповещения про ЭТРН
 * source: order/objects/notify-param-item.json
 *
 * @property string $email
 */
final class NotifyParamItem extends AbstractEntity
{
    protected static $types = ['email' => ['string']];
    protected static $nullables = ['email' => false];
}
