<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Claim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Claim\Objects\ClaimItem;

/**
 * Список претензий
 * source: claim/responses/ClaimListResponse.json#/properties/data
 *
 * @property ClaimItem[] $claims
 * @property Pagination $pagination
 */
final class ClaimListResponseData extends AbstractEntity
{
    protected static $types = [
        'claims' => ['array', 'Cargomart\ApiClient\Entity\Claim\Objects\ClaimItem'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['claims' => false, 'pagination' => false];
}
