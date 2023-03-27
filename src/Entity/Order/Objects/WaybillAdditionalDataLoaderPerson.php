<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/waybill-additional-data.json#/properties/loaderPerson
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Работник, осуществивший погрузку груза
 * source: order/objects/waybill-additional-data.json#/properties/loaderPerson
 *
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $position
 */
final class WaybillAdditionalDataLoaderPerson extends AbstractEntity
{
    protected static $types = [
        'firstName' => ['string'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
    ];

    protected static $nullables = ['firstName' => false, 'lastName' => false, 'secondName' => false, 'position' => false];
}
