<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: configuration/objects/configuration-mobile-app.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о мобильном приложении
 * source: configuration/objects/configuration-mobile-app.json
 *
 * @property string $versionMin
 * @property string $versionLatest
 * @property string $detectUrl
 * @property string $apkUrl
 * @property bool $disableGooglePlay
 */
final class ConfigurationMobileApp extends AbstractEntity
{
    protected static $types = [
        'versionMin' => ['string'],
        'versionLatest' => ['string'],
        'detectUrl' => ['string'],
        'apkUrl' => ['string'],
        'disableGooglePlay' => ['bool'],
    ];

    protected static $nullables = [
        'versionMin' => false,
        'versionLatest' => false,
        'detectUrl' => false,
        'apkUrl' => false,
        'disableGooglePlay' => false,
    ];
}
