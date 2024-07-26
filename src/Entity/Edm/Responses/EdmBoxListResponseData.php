<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Edm\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Edm\Objects\DiadocBoxIdData;

/**
 * source: edm/responses/edm-box-list-response.json#/properties/data
 *
 * @property DiadocBoxIdData[] $boxList
 */
final class EdmBoxListResponseData extends AbstractEntity
{
    protected static $types = ['boxList' => ['array', 'Cargomart\ApiClient\Entity\Edm\Objects\DiadocBoxIdData']];
    protected static $nullables = ['boxList' => false];
}
