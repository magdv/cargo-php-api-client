<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\User\Objects\UserParams;

/**
 * source: user/responses/use-desk-token-response.json#/properties/data
 *
 * @property UserParams $params
 */
final class UseDeskTokenResponseData extends AbstractEntity
{
    protected static $types = ['params' => ['Cargomart\ApiClient\Entity\User\Objects\UserParams']];
    protected static $nullables = ['params' => false];
}
