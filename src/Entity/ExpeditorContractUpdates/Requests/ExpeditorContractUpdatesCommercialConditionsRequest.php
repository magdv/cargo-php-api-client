<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects\ExpeditorContractUpdatesCommercialCondition;

/**
 * Коммерческие условия выбранные пользователем
 * source: expeditor-contract-updates/requests/expeditor-contract-updates-commercial-conditions-request.json
 *
 * @property ExpeditorContractUpdatesCommercialCondition[] $commercialConditions
 */
final class ExpeditorContractUpdatesCommercialConditionsRequest extends AbstractEntity
{
    protected static $types = [
        'commercialConditions' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects\ExpeditorContractUpdatesCommercialCondition',
        ],
    ];

    protected static $nullables = ['commercialConditions' => false];
}
