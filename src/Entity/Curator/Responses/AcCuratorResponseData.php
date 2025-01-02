<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Curator\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Curator\Objects\Curator;

/**
 * source: curator/responses/ac-curator-response.json#/properties/data
 *
 * @property Curator[] $curator
 * @property Pagination $pagination
 */
final class AcCuratorResponseData extends AbstractEntity
{
    protected static $types = [
        'curator' => ['array', 'Cargomart\ApiClient\Entity\Curator\Objects\Curator'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['curator' => false, 'pagination' => false];
}
