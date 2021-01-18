<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пагинация без общего количество
 * source: base/pagination-no-total.json
 *
 * @property int $perPage
 * @property int $page
 */
final class PaginationNoTotal extends AbstractEntity
{
    protected static $types = ['perPage' => ['int'], 'page' => ['int']];
    protected static $nullables = ['perPage' => false, 'page' => false];
}
