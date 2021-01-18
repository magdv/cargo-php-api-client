<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CarriageDirection;

/**
 * Компания отправителя
 * source: company/responses/carriage-direction.json#/properties/data#/properties/company
 *
 * @property string $id
 * @property CarriageDirection $carriageDirection
 */
final class CarriageDirectionDataCompany extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'carriageDirection' => ['Cargomart\ApiClient\Entity\Company\Objects\CarriageDirection'],
    ];

    protected static $nullables = ['id' => false, 'carriageDirection' => false];
}
