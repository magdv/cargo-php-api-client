<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список сгруппированных предзаказов
 * source: pre-order/responses/pre-order-group-list.json
 *
 * @property MessageV2[] $message
 * @property PreOrderGroupListData $data
 */
final class PreOrderGroupList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\PreOrder\Responses\PreOrderGroupListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
