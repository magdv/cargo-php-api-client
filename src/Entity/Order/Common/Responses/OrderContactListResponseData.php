<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderEditItem;
use Cargomart\ApiClient\Entity\Order\Common\Objects\ProgressItemListProgress;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: order/Common/responses/order-contact-list-response.json#/properties/data
 *
 * @property UserContactShort[] $contact
 * @property OrderEditItem $order
 * @property ProgressItemListProgress[] $progress
 */
final class OrderContactListResponseData extends AbstractEntity
{
    protected static $types = [
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'order' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderEditItem'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\ProgressItemListProgress'],
    ];

    protected static $nullables = ['contact' => false, 'order' => false, 'progress' => false];
}
