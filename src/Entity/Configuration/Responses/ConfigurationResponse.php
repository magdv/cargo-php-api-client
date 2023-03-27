<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: configuration/responses/configuration-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Текущая конфигурация системы
 * source: configuration/responses/configuration-response.json
 *
 * @property MessageV2[] $message
 * @property ConfigurationResponseData $data
 */
final class ConfigurationResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Configuration\Responses\ConfigurationResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
