<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные ответа
 * source: user/responses/user-one-time-token-response.json#/properties/data
 *
 * @property UserOneTimeTokenResponseDataOneTimeToken $oneTimeToken
 */
final class UserOneTimeTokenResponseData extends AbstractEntity
{
    protected static $types = [
        'oneTimeToken' => ['Cargomart\ApiClient\Entity\User\Responses\UserOneTimeTokenResponseDataOneTimeToken'],
    ];

    protected static $nullables = ['oneTimeToken' => false];
}
