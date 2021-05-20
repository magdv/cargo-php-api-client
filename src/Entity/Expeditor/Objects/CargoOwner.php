<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с данными о собственнике груза
 * source: expeditor/objects/cargo-owner.json
 *
 * @property int $legalStatus
 * @property string $legalName
 * @property string $shortName
 * @property string $phone
 * @property string $inn
 * @property string $kpp
 * @property string $bankName
 * @property string $operatingAccount
 * @property string $correspondingAccount
 * @property string $bic
 * @property string $ogrn
 */
final class CargoOwner extends AbstractEntity
{
    protected static $types = [
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'shortName' => ['string'],
        'phone' => ['string'],
        'inn' => ['string'],
        'kpp' => ['string'],
        'bankName' => ['string'],
        'operatingAccount' => ['string'],
        'correspondingAccount' => ['string'],
        'bic' => ['string'],
        'ogrn' => ['string'],
    ];

    protected static $nullables = [
        'legalStatus' => false,
        'legalName' => false,
        'shortName' => false,
        'phone' => false,
        'inn' => false,
        'kpp' => false,
        'bankName' => false,
        'operatingAccount' => false,
        'correspondingAccount' => false,
        'bic' => false,
        'ogrn' => false,
    ];
}
