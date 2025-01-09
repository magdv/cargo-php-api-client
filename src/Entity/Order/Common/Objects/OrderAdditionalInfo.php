<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект добавочных данных для модального окна
 * source: order/Common/objects/order-additional-info.json
 *
 * @property string $wealthBy
 * @property WealthItem[] $items
 * @property int[] $pointIndex
 * @property bool $isWithFacsimile
 * @property bool $isGenerateLink
 * @property OrderPublicLink $publicLink
 */
final class OrderAdditionalInfo extends AbstractEntity
{
    protected static $types = [
        'wealthBy' => ['string'],
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\WealthItem'],
        'pointIndex' => ['array', 'int'],
        'isWithFacsimile' => ['bool'],
        'isGenerateLink' => ['bool'],
        'publicLink' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderPublicLink'],
    ];

    protected static $nullables = [
        'wealthBy' => false,
        'items' => false,
        'pointIndex' => false,
        'isWithFacsimile' => false,
        'isGenerateLink' => false,
        'publicLink' => false,
    ];
}
