<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\WealthItem;

/**
 * Добавочные данные для заполнения доверенности на самовывоз с/без факсимиле
 * source: order/requests/order-additional-info-request.json
 *
 * @property string $wealthBy
 * @property WealthItem[] $items
 * @property int[] $pointIndex
 * @property bool $isWithFacsimile
 * @property bool $isGenerateLink
 */
final class OrderAdditionalInfoRequest extends AbstractEntity
{
    protected static $types = [
        'wealthBy' => ['string'],
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WealthItem'],
        'pointIndex' => ['array', 'int'],
        'isWithFacsimile' => ['bool'],
        'isGenerateLink' => ['bool'],
    ];

    protected static $nullables = [
        'wealthBy' => false,
        'items' => false,
        'pointIndex' => false,
        'isWithFacsimile' => false,
        'isGenerateLink' => false,
    ];
}
