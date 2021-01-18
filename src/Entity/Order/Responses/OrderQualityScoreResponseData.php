<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem;

/**
 * source: order/responses/order-quality-score-response.json#/properties/data
 *
 * @property OrderQualityScoreResponseDataOrder $order
 * @property OrderContactItem[] $contact
 */
final class OrderQualityScoreResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderQualityScoreResponseDataOrder'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem'],
    ];

    protected static $nullables = ['order' => false, 'contact' => false];
}
