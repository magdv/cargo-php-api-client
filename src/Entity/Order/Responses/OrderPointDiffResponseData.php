<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPointDiff;

/**
 * Common response data
 * source: order/responses/order-point-diff-response.json#/properties/data
 *
 * @property OrderPointDiff[] $pointDiff
 */
final class OrderPointDiffResponseData extends AbstractEntity
{
    protected static $types = ['pointDiff' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPointDiff']];
    protected static $nullables = ['pointDiff' => false];
}
