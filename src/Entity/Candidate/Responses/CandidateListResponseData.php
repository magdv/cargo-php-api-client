<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: candidate/responses/candidate-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Candidate\Objects\Candidate;

/**
 * source: candidate/responses/candidate-list-response.json#/properties/data
 *
 * @property Candidate[] $candidate
 * @property Pagination $pagination
 */
final class CandidateListResponseData extends AbstractEntity
{
    protected static $types = [
        'candidate' => ['array', 'Cargomart\ApiClient\Entity\Candidate\Objects\Candidate'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['candidate' => false, 'pagination' => false];
}
