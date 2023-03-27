<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/requests/user-recovery-confirm-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подтверждение восстановления проверочным кодом
 * source: user/requests/user-recovery-confirm-request.json
 *
 * @property string $code
 */
final class UserRecoveryConfirmRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
