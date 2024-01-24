<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Текущая конфигурация системы
 * source: configuration/responses/configuration-response.json
 *
 * @property ConfigurationResponseData $data
 */
final class ConfigurationResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Configuration\Responses\ConfigurationResponseData']];
    protected static $nullables = ['data' => false];
}
