<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список настроек компании
 * source: company/requests/settings-data-request.json
 *
 * @property bool $isUseOrderExternalId
 * @property bool $isHideRouteAddresses
 * @property string $orderExternalIdLabel
 * @property string $orderPriceCheckRate
 * @property bool $needApproveDriverTruckChanges
 * @property string $statusUsingEcn
 */
final class SettingsDataRequest extends AbstractEntity
{
    protected static $types = [
        'isUseOrderExternalId' => ['bool'],
        'isHideRouteAddresses' => ['bool'],
        'orderExternalIdLabel' => ['string'],
        'orderPriceCheckRate' => ['string'],
        'needApproveDriverTruckChanges' => ['bool'],
        'statusUsingEcn' => ['string'],
    ];

    protected static $nullables = [
        'isUseOrderExternalId' => false,
        'isHideRouteAddresses' => false,
        'orderExternalIdLabel' => false,
        'orderPriceCheckRate' => false,
        'needApproveDriverTruckChanges' => false,
        'statusUsingEcn' => false,
    ];
}
