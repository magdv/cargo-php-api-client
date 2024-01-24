<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Получение количества потенциальных сотрудников
 * source: candidate/responses/candidate-count-response.json
 *
 * @property CandidateCountResponseData $data
 */
final class CandidateCountResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Candidate\Responses\CandidateCountResponseData']];
    protected static $nullables = ['data' => false];
}
