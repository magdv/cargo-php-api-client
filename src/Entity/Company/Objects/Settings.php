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
 * @property bool $isHideRouteAddresses
 * @property string $orderExternalIdLabel
 * @property string $orderPriceCheckRate
 * @property bool $needApproveDriverTruckChanges
 * @property string $statusUsingEcn
 * @property SettingsAccess $access
 */
final class Settings extends AbstractEntity
{
    protected static $types = [
        'isUseOrderExternalId' => ['bool'],
        'isHideRouteAddresses' => ['bool'],
        'orderExternalIdLabel' => ['string'],
        'orderPriceCheckRate' => ['string'],
        'needApproveDriverTruckChanges' => ['bool'],
        'statusUsingEcn' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\SettingsAccess'],
    ];

    protected static $nullables = [
        'isUseOrderExternalId' => false,
        'isHideRouteAddresses' => false,
        'orderExternalIdLabel' => false,
        'orderPriceCheckRate' => false,
        'needApproveDriverTruckChanges' => false,
        'statusUsingEcn' => false,
        'access' => false,
    ];
}
