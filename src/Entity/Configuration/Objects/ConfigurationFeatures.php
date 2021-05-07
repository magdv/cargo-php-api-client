<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступная функциональность
 * source: configuration/objects/configuration-features.json
 *
 * @property bool $smallCarrier
 * @property bool $orderFilterNew
 * @property bool $webSocket
 * @property bool $newOrderEditForm
 * @property bool $pricePrediction
 */
final class ConfigurationFeatures extends AbstractEntity
{
    protected static $types = [
        'smallCarrier' => ['bool'],
        'orderFilterNew' => ['bool'],
        'webSocket' => ['bool'],
        'newOrderEditForm' => ['bool'],
        'pricePrediction' => ['bool'],
    ];

    protected static $nullables = [
        'smallCarrier' => false,
        'orderFilterNew' => false,
        'webSocket' => false,
        'newOrderEditForm' => false,
        'pricePrediction' => false,
    ];
}
