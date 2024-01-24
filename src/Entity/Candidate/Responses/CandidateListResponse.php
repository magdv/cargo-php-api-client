<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Получение списка потенциальных сотрудников
 * source: candidate/responses/candidate-list-response.json
 *
 * @property CandidateListResponseData $data
 */
final class CandidateListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Candidate\Responses\CandidateListResponseData']];
    protected static $nullables = ['data' => false];
}
