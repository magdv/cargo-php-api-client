<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem;
use Cargomart\ApiClient\Entity\Order\Objects\ProgressItemListProgress;

/**
 * source: order/responses/order-contact-list-response.json#/properties/data
 *
 * @property OrderContactItem[] $contact
 * @property OrderEditItem $order
 * @property ProgressItemListProgress[] $progress
 */
final class OrderContactListResponseData extends AbstractEntity
{
    protected static $types = [
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem'],
        'order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItemListProgress'],
    ];

    protected static $nullables = ['contact' => false, 'order' => false, 'progress' => false];
}
