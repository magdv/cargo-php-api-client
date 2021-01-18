<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Rate;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * Информация по котировкам
 * source: rate/rate-list.json#/properties/data
 *
 * @property RateItem[] $rate
 * @property Pagination $pagination
 */
final class RateListData extends AbstractEntity
{
    protected static $types = [
        'rate' => ['array', 'Cargomart\ApiClient\Entity\Rate\RateItem'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['rate' => false, 'pagination' => false];
}
