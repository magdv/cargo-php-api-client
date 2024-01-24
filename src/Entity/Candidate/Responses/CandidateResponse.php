<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Получение карточки потенциального сотрудника
 * source: candidate/responses/candidate-response.json
 *
 * @property CandidateResponseData $data
 */
final class CandidateResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Candidate\Responses\CandidateResponseData']];
    protected static $nullables = ['data' => false];
}
