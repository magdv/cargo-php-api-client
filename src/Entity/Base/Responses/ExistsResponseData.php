<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/responses/exists-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: base/responses/exists-response.json#/properties/data
 *
 * @property bool $exists
 */
final class ExistsResponseData extends AbstractEntity
{
    protected static $types = ['exists' => ['bool']];
    protected static $nullables = ['exists' => false];
}
