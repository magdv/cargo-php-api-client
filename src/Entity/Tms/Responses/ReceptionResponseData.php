<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: tms/responses/reception-response.json#/properties/data
 *
 * @property bool $status
 */
final class ReceptionResponseData extends AbstractEntity
{
    protected static $types = ['status' => ['bool']];
    protected static $nullables = ['status' => false];
}
