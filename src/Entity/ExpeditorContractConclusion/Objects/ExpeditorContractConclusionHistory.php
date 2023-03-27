<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-history.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект истории изменения документа договора
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-history.json
 *
 * @property ExpeditorContractConclusionValidation[] $validation
 * @property ExpeditorContractConclusionFileGenerateInfo[] $fileGenerateInfo
 */
final class ExpeditorContractConclusionHistory extends AbstractEntity
{
    protected static $types = [
        'validation' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionValidation',
        ],
        'fileGenerateInfo' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionFileGenerateInfo',
        ],
    ];

    protected static $nullables = ['validation' => false, 'fileGenerateInfo' => false];
}
