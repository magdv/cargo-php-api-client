<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Экспортная информация по компании для заказ
 * source: order/Common/objects/company-export.json
 *
 * @property string $id
 * @property string $shortName
 * @property string $logo
 * @property string $type
 * @property string $phone
 * @property string $inn
 * @property bool $isWithVat
 * @property string $kpp
 * @property string $bankName
 * @property string $operatingAccount
 * @property string $correspondingAccount
 * @property string $bic
 * @property bool $isDirectSender
 * @property \stdClass $sessionValues
 * @property string $ogrn
 */
final class CompanyExport extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'shortName' => ['string'],
        'logo' => ['string'],
        'type' => ['string'],
        'phone' => ['string'],
        'inn' => ['string'],
        'isWithVat' => ['bool'],
        'kpp' => ['string'],
        'bankName' => ['string'],
        'operatingAccount' => ['string'],
        'correspondingAccount' => ['string'],
        'bic' => ['string'],
        'isDirectSender' => ['bool'],
        'sessionValues' => ['\stdClass'],
        'ogrn' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'shortName' => false,
        'logo' => false,
        'type' => false,
        'phone' => false,
        'inn' => false,
        'isWithVat' => false,
        'kpp' => false,
        'bankName' => false,
        'operatingAccount' => false,
        'correspondingAccount' => false,
        'bic' => false,
        'isDirectSender' => false,
        'sessionValues' => true,
        'ogrn' => false,
    ];
}
