<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: order/responses/order-tag-list-response.json#/properties/data
 *
 * @property string[] $tag
 */
final class OrderTagListResponseData extends AbstractEntity
{
    protected static $types = ['tag' => ['array', 'string']];
    protected static $nullables = ['tag' => false];
}
