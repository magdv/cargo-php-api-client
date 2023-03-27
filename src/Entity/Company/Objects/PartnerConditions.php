<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/partner-conditions.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Условия партнёрства
 * source: company/objects/partner-conditions.json
 *
 * @property string $id
 * @property string $partnershipConditions
 * @property int[] $partnershipContactIds
 */
final class PartnerConditions extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'partnershipConditions' => ['string'],
        'partnershipContactIds' => ['array', 'int'],
    ];

    protected static $nullables = ['id' => false, 'partnershipConditions' => false, 'partnershipContactIds' => false];
}
