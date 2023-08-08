<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Форма редактирования условий партнёрства
 * source: company/requests/partner-conditions-request.json
 *
 * @property string $partnershipConditions
 * @property int[] $partnershipContactIds
 */
final class PartnerConditionsRequest extends AbstractEntity
{
    protected static $types = ['partnershipConditions' => ['string'], 'partnershipContactIds' => ['array', 'int']];
    protected static $nullables = ['partnershipConditions' => false, 'partnershipContactIds' => false];
}
