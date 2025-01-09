<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem;

/**
 * Список договоров Перевозчика с Экспедитором
 * source: expeditor-carrier-contract/responses/expeditor-carrier-contract-list.json#/properties/data
 *
 * @property ContractItem[] $contracts
 * @property ExpeditorCarrierContractListDataCommercialConditions $commercialConditions
 * @property Pagination $pagination
 */
final class ExpeditorCarrierContractListData extends AbstractEntity
{
    protected static $types = [
        'contracts' => ['array', 'Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem'],
        'commercialConditions' => [
            'Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Responses\ExpeditorCarrierContractListDataCommercialConditions',
        ],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['contracts' => false, 'commercialConditions' => false, 'pagination' => false];
}
