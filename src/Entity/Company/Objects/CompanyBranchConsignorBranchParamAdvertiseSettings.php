<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Настройки рекламы дочерней компании заказчика
 * source: company/objects/company-branch-consignor-branch-param-advertise-settings.json
 *
 * @property string $advertiseStatus
 * @property string $advertiseSinceDate
 * @property string $advertiseUntilDate
 */
final class CompanyBranchConsignorBranchParamAdvertiseSettings extends AbstractEntity
{
    protected static $types = [
        'advertiseStatus' => ['string'],
        'advertiseSinceDate' => ['string'],
        'advertiseUntilDate' => ['string'],
    ];

    protected static $nullables = ['advertiseStatus' => false, 'advertiseSinceDate' => false, 'advertiseUntilDate' => false];
}
