<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Краткая информация по компании
 * source: company/objects/company-short.json
 *
 * @property string $id
 * @property string $shortName
 * @property string $logo
 * @property bool $isWithVat
 * @property bool $isDirectSender
 * @property string $inn
 * @property string $ogrn
 * @property string $kpp
 * @property Settings $settings
 * @property int $statusId
 * @property CompanyShortSessionValues $sessionValues
 */
final class CompanyShort extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'shortName' => ['string'],
        'logo' => ['string'],
        'isWithVat' => ['bool'],
        'isDirectSender' => ['bool'],
        'inn' => ['string'],
        'ogrn' => ['string'],
        'kpp' => ['string'],
        'settings' => ['Cargomart\ApiClient\Entity\Company\Objects\Settings'],
        'statusId' => ['int'],
        'sessionValues' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyShortSessionValues'],
    ];

    protected static $nullables = [
        'id' => false,
        'shortName' => false,
        'logo' => false,
        'isWithVat' => false,
        'isDirectSender' => false,
        'inn' => false,
        'ogrn' => false,
        'kpp' => false,
        'settings' => false,
        'statusId' => false,
        'sessionValues' => false,
    ];
}
