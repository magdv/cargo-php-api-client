<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Сгруппированный предзаказ
 * source: pre-order/responses/pre-order-group-item.json
 *
 * @property MessageV2[] $message
 * @property PreOrderGroupItemData $data
 */
final class PreOrderGroupItem extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderGroupItemData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
