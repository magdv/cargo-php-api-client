<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\WealthItem;

/**
 * Добавочные данные для заполнения доверенности на самовывоз с/без факсимиле
 * source: order/Common/requests/order-proxy-info-request.json
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
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\WealthItem'],
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
