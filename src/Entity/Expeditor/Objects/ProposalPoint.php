<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Данные маршрутного пункта
 * source: expeditor/objects/proposal-point.json
 *
 * @property UserContactShort[] $contact
 * @property StoragePointItem $storage
 * @property CargoOwner $cargoOwner
 * @property string $type
 * @property string $additionalInfo
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toTime
 */
final class ProposalPoint extends AbstractEntity
{
    protected static $types = [
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'storage' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'cargoOwner' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\CargoOwner'],
        'type' => ['string'],
        'additionalInfo' => ['string'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
    ];

    protected static $nullables = [
        'contact' => false,
        'storage' => false,
        'cargoOwner' => false,
        'type' => false,
        'additionalInfo' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toTime' => false,
    ];
}
