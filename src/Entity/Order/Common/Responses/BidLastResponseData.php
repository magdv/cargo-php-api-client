<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Currency;
use Cargomart\ApiClient\Entity\Order\Common\Objects\BidPullInfoItem;

/**
 * source: order/Common/responses/bid-last-response.json#/properties/data
 *
 * @property BidPullInfoItem $order
 * @property Currency[] $currency
 */
final class BidLastResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\BidPullInfoItem'],
        'currency' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Currency'],
    ];

    protected static $nullables = ['order' => false, 'currency' => false];
}
