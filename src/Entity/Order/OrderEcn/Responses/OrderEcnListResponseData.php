<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem;
use Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\OrderEcnItem;

/**
 * Данные
 * source: order/OrderEcn/responses/order-ecn-list-response.json#/properties/data
 *
 * @property OrderEcnItem[] $ecn
 * @property ContainerTypeItem[] $container
 */
final class OrderEcnListResponseData extends AbstractEntity
{
    protected static $types = [
        'ecn' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\OrderEcnItem'],
        'container' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem'],
    ];

    protected static $nullables = ['ecn' => false, 'container' => false];
}
