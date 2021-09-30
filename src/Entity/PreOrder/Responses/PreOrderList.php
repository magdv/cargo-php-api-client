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
 * Список предзаказов
 * source: pre-order/responses/pre-order-list.json
 *
 * @property MessageV2[] $message
 * @property PreOrderListData $data
 */
final class PreOrderList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
