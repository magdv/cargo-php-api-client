<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderEcnItem;

/**
 * Данные
 * source: order/responses/order-ecn-list-response.json#/properties/data
 *
 * @property OrderEcnItem[] $ecn
 * @property Pagination $pagination
 * @property ContainerTypeItem[] $container
 */
final class OrderEcnListResponseData extends AbstractEntity
{
    protected static $types = [
        'ecn' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderEcnItem'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
        'container' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem'],
    ];

    protected static $nullables = ['ecn' => false, 'pagination' => false, 'container' => false];
}
