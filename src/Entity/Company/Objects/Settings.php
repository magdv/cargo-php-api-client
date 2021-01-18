<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список настроек компании
 * source: company/objects/settings.json
 *
 * @property bool $isUseOrderExternalId
 * @property string $orderExternalIdLabel
 * @property string $orderPriceCheckRate
 * @property bool $needApproveDriverTruckChanges
 * @property SettingsAccess $access
 */
final class Settings extends AbstractEntity
{
    protected static $types = [
        'isUseOrderExternalId' => ['bool'],
        'orderExternalIdLabel' => ['string'],
        'orderPriceCheckRate' => ['string'],
        'needApproveDriverTruckChanges' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\SettingsAccess'],
    ];

    protected static $nullables = [
        'isUseOrderExternalId' => false,
        'orderExternalIdLabel' => false,
        'orderPriceCheckRate' => false,
        'needApproveDriverTruckChanges' => false,
        'access' => false,
    ];
}
