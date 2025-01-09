<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ExpeditorCarrierContractCommercialCondition;

/**
 * source: expeditor-carrier-contract/responses/expeditor-carrier-contract-list.json#/properties/data#/properties/commercialConditions
 *
 * @property ExpeditorCarrierContractCommercialCondition[] $active
 * @property ExpeditorCarrierContractCommercialCondition[] $available
 * @property ExpeditorCarrierContractCommercialCondition[] $inProcess
 */
final class ExpeditorCarrierContractListDataCommercialConditions extends AbstractEntity
{
    protected static $types = [
        'active' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ExpeditorCarrierContractCommercialCondition',
        ],
        'available' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ExpeditorCarrierContractCommercialCondition',
        ],
        'inProcess' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ExpeditorCarrierContractCommercialCondition',
        ],
    ];

    protected static $nullables = ['active' => false, 'available' => false, 'inProcess' => false];
}
