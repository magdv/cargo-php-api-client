<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Краткая информация по чужой компании
 * source: company/objects/company-other-short.json
 *
 * @property string $id
 * @property string $shortName
 * @property string $logo
 * @property bool $isWithVat
 * @property bool $isDirectSender
 * @property string $inn
 * @property string $ogrn
 * @property string $kpp
 * @property int $statusId
 */
final class CompanyOtherShort extends AbstractEntity
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
        'statusId' => ['int'],
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
        'statusId' => false,
    ];
}
