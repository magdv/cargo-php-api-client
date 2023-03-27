<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: candidate/responses/candidate-count-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение количества потенциальных сотрудников
 * source: candidate/responses/candidate-count-response.json
 *
 * @property MessageV2[] $message
 * @property CandidateCountResponseData $data
 */
final class CandidateCountResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Candidate\Responses\CandidateCountResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
