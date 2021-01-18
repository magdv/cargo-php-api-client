<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\Message;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Root component
 * source: user/responses/user-full-response.json
 *
 * @property Message[] $errors
 * @property Message[] $notice
 * @property MessageV2[] $message
 * @property UserFullResponseData $data
 */
final class UserFullResponse extends AbstractResponse
{
    protected static $types = [
        'errors' => ['array', 'Cargomart\ApiClient\Entity\Base\Message'],
        'notice' => ['array', 'Cargomart\ApiClient\Entity\Base\Message'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\User\Responses\UserFullResponseData'],
    ];

    protected static $nullables = ['errors' => false, 'notice' => false, 'message' => false, 'data' => false];
}
