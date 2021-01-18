<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DriverApp\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детальная информация о статусе установки 'приложения водителя' на телефон
 * source: driver-app/objects/driver-app-detail.json
 *
 * @property string $phone
 * @property string $status
 */
final class DriverAppDetail extends AbstractEntity
{
    protected static $types = ['phone' => ['string'], 'status' => ['string']];
    protected static $nullables = ['phone' => false, 'status' => false];
}
