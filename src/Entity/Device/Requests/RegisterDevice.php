<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Device\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на регистрацию устройства
 * source: device/requests/register-device.json
 *
 * @property string $deviceId
 * @property string $type
 */
final class RegisterDevice extends AbstractEntity
{
    protected static $types = ['deviceId' => ['string'], 'type' => ['string']];
    protected static $nullables = ['deviceId' => false, 'type' => false];
}
