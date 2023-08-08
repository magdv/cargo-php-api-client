<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с результатами проверки
 * source: order/objects/check-item.json
 *
 * @property string $title
 * @property bool $check
 */
final class CheckItem extends AbstractEntity
{
    protected static $types = ['title' => ['string'], 'check' => ['bool']];
    protected static $nullables = ['title' => false, 'check' => false];
}
