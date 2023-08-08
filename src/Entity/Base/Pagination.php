<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пагинация
 * source: base/pagination.json
 *
 * @property int $perPage
 * @property int $page
 * @property int $total
 */
final class Pagination extends AbstractEntity
{
    protected static $types = ['perPage' => ['int'], 'page' => ['int'], 'total' => ['int']];
    protected static $nullables = ['perPage' => false, 'page' => false, 'total' => false];
}
