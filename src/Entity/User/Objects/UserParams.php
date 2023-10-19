<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Параметры пользователя
 * source: user/objects/user-params.json
 *
 * @property string $useDeskToken
 */
final class UserParams extends AbstractEntity
{
    protected static $types = ['useDeskToken' => ['string']];
    protected static $nullables = ['useDeskToken' => false];
}
