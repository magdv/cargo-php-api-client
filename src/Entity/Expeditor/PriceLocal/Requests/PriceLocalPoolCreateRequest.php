<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания пула направлений и цен
 * source: expeditor/PriceLocal/requests/price-local-pool-create-request.json
 *
 * @property string $title
 * @property bool $isActive
 */
final class PriceLocalPoolCreateRequest extends AbstractEntity
{
    protected static $types = ['title' => ['string'], 'isActive' => ['bool']];
    protected static $nullables = ['title' => false, 'isActive' => false];
}
