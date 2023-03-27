<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/responses/user-code-success-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractResponse;

/**
 * Успешно подтвержден код
 * source: user/responses/user-code-success-response.json
 *
 * @property string $id
 * @property string $type
 * @property string $login
 * @property int $delay
 * @property string $password
 * @property string $token
 * @property string $expirationDate
 * @property bool $isInvited
 */
final class UserCodeSuccessResponse extends AbstractResponse
{
    protected static $types = [
        'id' => ['string'],
        'type' => ['string'],
        'login' => ['string'],
        'delay' => ['int'],
        'password' => ['string'],
        'token' => ['string'],
        'expirationDate' => ['string'],
        'isInvited' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'type' => false,
        'login' => false,
        'delay' => false,
        'password' => false,
        'token' => false,
        'expirationDate' => false,
        'isInvited' => false,
    ];
}
