<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список настроек компании
 * source: company/requests/settings-data.json
 *
 * @property bool $isUseOrderExternalId
 * @property string $orderExternalIdLabel
 */
final class SettingsData extends AbstractEntity
{
    protected static $types = ['isUseOrderExternalId' => ['bool'], 'orderExternalIdLabel' => ['string']];
    protected static $nullables = ['isUseOrderExternalId' => false, 'orderExternalIdLabel' => false];
}
