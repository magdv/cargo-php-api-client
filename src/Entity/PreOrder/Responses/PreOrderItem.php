<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Предзаказ
 * source: pre-order/responses/pre-order-item.json
 *
 * @property MessageV2[] $message
 * @property PreOrderItemData $data
 */
final class PreOrderItem extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderItemData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
