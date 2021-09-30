<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение карточки потенциального сотрудника
 * source: candidate/responses/candidate-response.json
 *
 * @property MessageV2[] $message
 * @property CandidateResponseData $data
 */
final class CandidateResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Candidate\Responses\CandidateResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
