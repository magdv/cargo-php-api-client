<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание соответствия оператора и статусов
 * source: order/objects/ecn-logistics-status-container.json
 *
 * @property string $operator
 * @property string $value
 */
final class EcnLogisticsStatusContainer extends AbstractEntity
{
    protected static $types = ['operator' => ['string'], 'value' => ['string']];
    protected static $nullables = ['operator' => false, 'value' => false];
}
