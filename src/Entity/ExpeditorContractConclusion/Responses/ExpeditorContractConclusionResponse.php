<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/responses/expeditor-contract-conclusion-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с состоянием заключения договора с экспедитором
 * source: expeditor-contract-conclusion/responses/expeditor-contract-conclusion-response.json
 *
 * @property MessageV2[] $message
 * @property ExpeditorContractConclusionResponseData $data
 */
final class ExpeditorContractConclusionResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => [
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Responses\ExpeditorContractConclusionResponseData',
        ],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
