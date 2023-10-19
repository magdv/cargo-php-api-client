<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к пулу цен и направлений
 * source: expeditor/objects/price-local-pool-access.json
 *
 * @property bool $update
 * @property bool $delete
 * @property bool $createDirection
 * @property bool $createPrice
 */
final class PriceLocalPoolAccess extends AbstractEntity
{
    protected static $types = [
        'update' => ['bool'],
        'delete' => ['bool'],
        'createDirection' => ['bool'],
        'createPrice' => ['bool'],
    ];

    protected static $nullables = [
        'update' => false,
        'delete' => false,
        'createDirection' => false,
        'createPrice' => false,
    ];
}
