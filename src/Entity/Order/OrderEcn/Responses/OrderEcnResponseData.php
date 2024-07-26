<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem;
use Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\OrderEcn;

/**
 * Данные
 * source: order/OrderEcn/responses/order-ecn-response.json#/properties/data
 *
 * @property OrderEcn $ecn
 * @property ContainerTypeItem[] $container
 */
final class OrderEcnResponseData extends AbstractEntity
{
    protected static $types = [
        'ecn' => ['Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\OrderEcn'],
        'container' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem'],
    ];

    protected static $nullables = ['ecn' => false, 'container' => false];
}
