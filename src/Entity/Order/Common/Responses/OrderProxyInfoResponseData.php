<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderProxyInfoItem;

/**
 * Имеющиеся добавочные данные
 * source: order/Common/responses/order-proxy-info-response.json#/properties/data
 *
 * @property OrderProxyInfoItem[] $proxyInfo
 */
final class OrderProxyInfoResponseData extends AbstractEntity
{
    protected static $types = [
        'proxyInfo' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderProxyInfoItem'],
    ];

    protected static $nullables = ['proxyInfo' => false];
}
