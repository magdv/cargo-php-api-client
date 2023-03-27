<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: locality/responses/locality-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Locality\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PaginationNoTotal;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;

/**
 * source: locality/responses/locality-response.json#/properties/data
 *
 * @property Locality[] $locality
 * @property PaginationNoTotal $pagination
 */
final class LocalityResponseData extends AbstractEntity
{
    protected static $types = [
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\PaginationNoTotal'],
    ];

    protected static $nullables = ['locality' => false, 'pagination' => false];
}
