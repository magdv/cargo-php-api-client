<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: driver-app/requests/driver-app-invite-post-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DriverApp\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на отправку приглашения на установку 'приложения водителя'
 * source: driver-app/requests/driver-app-invite-post-request.json
 *
 * @property string $phone
 */
final class DriverAppInvitePostRequest extends AbstractEntity
{
    protected static $types = ['phone' => ['string']];
    protected static $nullables = ['phone' => false];
}
