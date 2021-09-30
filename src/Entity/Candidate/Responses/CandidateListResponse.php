<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение списка потенциальных сотрудников
 * source: candidate/responses/candidate-list-response.json
 *
 * @property MessageV2[] $message
 * @property CandidateListResponseData $data
 */
final class CandidateListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Candidate\Responses\CandidateListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
