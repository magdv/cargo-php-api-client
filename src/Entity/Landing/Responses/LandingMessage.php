<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: landing/responses/landing-message.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Landing\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ об успешной отправке
 * source: landing/responses/landing-message.json
 *
 * @property MessageV2[] $message
 */
final class LandingMessage extends AbstractResponse
{
    protected static $types = ['message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2']];
    protected static $nullables = ['message' => false];
}
