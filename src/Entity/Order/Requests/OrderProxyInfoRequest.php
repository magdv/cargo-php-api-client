<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-proxy-info-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\WealthItem;

/**
 * Добавочные данные для заполнения доверенности на самовывоз с/без факсимиле
 * source: order/requests/order-proxy-info-request.json
 *
 * @property string $wealthBy
 * @property WealthItem[] $items
 * @property int $pointIdFrom
 * @property int $pointIdTo
 * @property bool $isWithFacsimile
 */
final class OrderProxyInfoRequest extends AbstractEntity
{
    protected static $types = [
        'wealthBy' => ['string'],
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WealthItem'],
        'pointIdFrom' => ['int'],
        'pointIdTo' => ['int'],
        'isWithFacsimile' => ['bool'],
    ];

    protected static $nullables = [
        'wealthBy' => false,
        'items' => false,
        'pointIdFrom' => false,
        'pointIdTo' => false,
        'isWithFacsimile' => false,
    ];
}
