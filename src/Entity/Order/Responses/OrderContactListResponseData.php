<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-contact-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem;
use Cargomart\ApiClient\Entity\Order\Objects\ProgressItem;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: order/responses/order-contact-list-response.json#/properties/data
 *
 * @property UserContactShort[] $contact
 * @property OrderEditItem $order
 * @property ProgressItem[] $progress
 */
final class OrderContactListResponseData extends AbstractEntity
{
    protected static $types = [
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItem'],
    ];

    protected static $nullables = ['contact' => false, 'order' => false, 'progress' => false];
}
