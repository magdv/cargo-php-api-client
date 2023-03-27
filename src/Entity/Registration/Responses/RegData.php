<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: registration/responses/reg.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Registration\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Registration\Objects\ObjectReg;

/**
 * source: registration/responses/reg.json#/properties/data
 *
 * @property ObjectReg $registration
 */
final class RegData extends AbstractEntity
{
    protected static $types = ['registration' => ['Cargomart\ApiClient\Entity\Registration\Objects\ObjectReg']];
    protected static $nullables = ['registration' => false];
}
