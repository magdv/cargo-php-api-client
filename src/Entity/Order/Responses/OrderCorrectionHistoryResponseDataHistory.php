<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-correction-history-response.json#/properties/data/properties/history
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCorrectionHistoryItem;

/**
 * История изменений по заявке
 * source: order/responses/order-correction-history-response.json#/properties/data/properties/history
 *
 * @property int $correctionId
 * @property OrderCorrectionHistoryItem $oldValues
 * @property OrderCorrectionHistoryItem $newValues
 */
final class OrderCorrectionHistoryResponseDataHistory extends AbstractEntity
{
    protected static $types = [
        'correctionId' => ['int'],
        'oldValues' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCorrectionHistoryItem'],
        'newValues' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCorrectionHistoryItem'],
    ];

    protected static $nullables = ['correctionId' => false, 'oldValues' => false, 'newValues' => false];
}
