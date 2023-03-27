<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: candidate/responses/candidate-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Candidate\Objects\Candidate;

/**
 * source: candidate/responses/candidate-response.json#/properties/data
 *
 * @property Candidate $candidate
 */
final class CandidateResponseData extends AbstractEntity
{
    protected static $types = ['candidate' => ['Cargomart\ApiClient\Entity\Candidate\Objects\Candidate']];
    protected static $nullables = ['candidate' => false];
}
