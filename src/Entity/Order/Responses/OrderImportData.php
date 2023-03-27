<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-import.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/responses/order-import.json#/properties/data
 *
 * @property string $download
 * @property string $title
 * @property int $count
 */
final class OrderImportData extends AbstractEntity
{
    protected static $types = ['download' => ['string'], 'title' => ['string'], 'count' => ['int']];
    protected static $nullables = ['download' => false, 'title' => false, 'count' => false];
}
