<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusion;

/**
 * source: expeditor-contract-conclusion/responses/expeditor-contract-conclusion-response.json#/properties/data
 *
 * @property ExpeditorContractConclusion $contractConclusion
 */
final class ExpeditorContractConclusionResponseData extends AbstractEntity
{
    protected static $types = [
        'contractConclusion' => [
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusion',
        ],
    ];

    protected static $nullables = ['contractConclusion' => false];
}
