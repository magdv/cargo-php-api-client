<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\GeneralPartner\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект данных договора с ГП
 * source: general-partner/objects/general-partner-contract.json
 *
 * @property string $id
 * @property string $generalPartnerId
 * @property string $date
 * @property string $number
 * @property string $title
 * @property GeneralPartnerFee $fee
 */
final class GeneralPartnerContract extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'generalPartnerId' => ['string'],
        'date' => ['string'],
        'number' => ['string'],
        'title' => ['string'],
        'fee' => ['Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerFee'],
    ];

    protected static $nullables = [
        'id' => false,
        'generalPartnerId' => false,
        'date' => false,
        'number' => false,
        'title' => false,
        'fee' => false,
    ];
}
