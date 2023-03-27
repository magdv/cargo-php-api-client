<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: trailer/responses/trailer-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Trailer\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Trailer\Objects\TrailerOne;

/**
 * Список тягачей и прицепов
 * source: trailer/responses/trailer-list-response.json#/properties/data
 *
 * @property TrailerOne[] $trailer
 * @property Pagination $pagination
 */
final class TrailerListResponseData extends AbstractEntity
{
    protected static $types = [
        'trailer' => ['array', 'Cargomart\ApiClient\Entity\Trailer\Objects\TrailerOne'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['trailer' => false, 'pagination' => false];
}
