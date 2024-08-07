<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Работник, осуществивший погрузку груза
 * source: order/OrderEcn/objects/ecn-additional-data.json#/properties/loaderPerson
 *
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $position
 */
final class EcnAdditionalDataLoaderPerson extends AbstractEntity
{
    protected static $types = [
        'firstName' => ['string'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
    ];

    protected static $nullables = ['firstName' => false, 'lastName' => false, 'secondName' => false, 'position' => false];
}
