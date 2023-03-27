<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: driver/requests/driver-app-invite-post-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на отправку приглашения на установку 'приложения водителя'
 * source: driver/requests/driver-app-invite-post-request.json
 *
 * @property string $phone
 */
final class DriverAppInvitePostRequest extends AbstractEntity
{
    protected static $types = ['phone' => ['string']];
    protected static $nullables = ['phone' => false];
}
