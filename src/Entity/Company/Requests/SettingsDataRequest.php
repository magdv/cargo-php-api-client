<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/requests/settings-data-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список настроек компании
 * source: company/requests/settings-data-request.json
 *
 * @property bool $isUseOrderExternalId
 * @property string $orderExternalIdLabel
 * @property bool $isHideRouteAddresses
 * @property string $statusUsingEcn
 */
final class SettingsDataRequest extends AbstractEntity
{
    protected static $types = [
        'isUseOrderExternalId' => ['bool'],
        'orderExternalIdLabel' => ['string'],
        'isHideRouteAddresses' => ['bool'],
        'statusUsingEcn' => ['string'],
    ];

    protected static $nullables = [
        'isUseOrderExternalId' => false,
        'orderExternalIdLabel' => false,
        'isHideRouteAddresses' => false,
        'statusUsingEcn' => false,
    ];
}
