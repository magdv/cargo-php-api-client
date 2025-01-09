<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект состояния обновления договора
 * source: expeditor-contract-updates/objects/expeditor-contract-updates-state.json
 *
 * @property string $status
 * @property \stdClass $statusUpdatedAt
 * @property \stdClass $additionalAgreement
 * @property ExpeditorContractUpdatesCommercialConditionFull[] $commercialConditions
 * @property string[] $selectedCommercialConditions
 * @property ExpeditorContractUpdatesSigner $signer
 * @property ExpeditorContractUpdatesProxy $proxy
 */
final class ExpeditorContractUpdatesState extends AbstractEntity
{
    protected static $types = [
        'status' => ['string'],
        'statusUpdatedAt' => ['\stdClass'],
        'additionalAgreement' => ['\stdClass'],
        'commercialConditions' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects\ExpeditorContractUpdatesCommercialConditionFull',
        ],
        'selectedCommercialConditions' => ['array', 'string'],
        'signer' => ['Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects\ExpeditorContractUpdatesSigner'],
        'proxy' => ['Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects\ExpeditorContractUpdatesProxy'],
    ];

    protected static $nullables = [
        'status' => false,
        'statusUpdatedAt' => true,
        'additionalAgreement' => true,
        'commercialConditions' => false,
        'selectedCommercialConditions' => false,
        'signer' => false,
        'proxy' => false,
    ];
}
