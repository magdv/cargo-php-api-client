<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderConditions\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Условия перевозки по направлению
 * source: order-conditions/objects/order-conditions.json
 *
 * @property float $vatRate
 * @property OrderConditionsExpeditor $expeditorConditions
 */
final class OrderConditions extends AbstractEntity
{
    protected static $types = [
        'vatRate' => ['float'],
        'expeditorConditions' => ['Cargomart\ApiClient\Entity\OrderConditions\Objects\OrderConditionsExpeditor'],
    ];

    protected static $nullables = ['vatRate' => false, 'expeditorConditions' => false];
}
