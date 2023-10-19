<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Юнит объекта добавочных данных
 * source: order/objects/order-proxy-info-item.json
 *
 * @property string $wealthBy
 * @property WealthItem[] $items
 * @property int $pointIdFrom
 * @property int $pointIdTo
 * @property bool $isWithFacsimile
 * @property string $proxyDownloadUrl
 * @property string $proxyFileName
 */
final class OrderProxyInfoItem extends AbstractEntity
{
    protected static $types = [
        'wealthBy' => ['string'],
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WealthItem'],
        'pointIdFrom' => ['int'],
        'pointIdTo' => ['int'],
        'isWithFacsimile' => ['bool'],
        'proxyDownloadUrl' => ['string'],
        'proxyFileName' => ['string'],
    ];

    protected static $nullables = [
        'wealthBy' => false,
        'items' => false,
        'pointIdFrom' => false,
        'pointIdTo' => false,
        'isWithFacsimile' => false,
        'proxyDownloadUrl' => false,
        'proxyFileName' => false,
    ];
}
