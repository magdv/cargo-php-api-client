<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: candidate/responses/candidate-count-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: candidate/responses/candidate-count-response.json#/properties/data
 *
 * @property int $count
 */
final class CandidateCountResponseData extends AbstractEntity
{
    protected static $types = ['count' => ['int']];
    protected static $nullables = ['count' => false];
}
