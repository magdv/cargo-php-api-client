<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Обновляет токен с useDesk пользователю
 * source: user/requests/usedesk-token-request.json
 *
 * @property string $token
 */
final class UsedeskTokenRequest extends AbstractEntity
{
    protected static $types = ['token' => ['string']];
    protected static $nullables = ['token' => false];
}
