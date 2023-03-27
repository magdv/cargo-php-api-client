<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/responses/use-desk-token-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Токен сохранен
 * source: user/responses/use-desk-token-response.json
 *
 * @property MessageV2[] $message
 * @property UseDeskTokenResponseData $data
 */
final class UseDeskTokenResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\User\Responses\UseDeskTokenResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
