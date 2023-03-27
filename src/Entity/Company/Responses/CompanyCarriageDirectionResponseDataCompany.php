<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-carriage-direction-response.json#/properties/data/properties/company
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CarriageDirection;

/**
 * Компания отправителя
 * source: company/responses/company-carriage-direction-response.json#/properties/data/properties/company
 *
 * @property string $id
 * @property CarriageDirection $carriageDirection
 */
final class CompanyCarriageDirectionResponseDataCompany extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'carriageDirection' => ['Cargomart\ApiClient\Entity\Company\Objects\CarriageDirection'],
    ];

    protected static $nullables = ['id' => false, 'carriageDirection' => false];
}
