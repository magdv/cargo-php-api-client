<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Токен сохранен
 * source: user/responses/use-desk-token-response.json
 *
 * @property UseDeskTokenResponseData $data
 */
final class UseDeskTokenResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\User\Responses\UseDeskTokenResponseData']];
    protected static $nullables = ['data' => false];
}
