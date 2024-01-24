<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с состоянием заключения договора с экспедитором
 * source: expeditor-contract-conclusion/responses/expeditor-contract-conclusion-response.json
 *
 * @property ExpeditorContractConclusionResponseData $data
 * @property MessageV2[] $message
 */
final class ExpeditorContractConclusionResponse extends AbstractResponse
{
    protected static $types = [
        'data' => [
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses\ExpeditorContractConclusionResponseData',
        ],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
