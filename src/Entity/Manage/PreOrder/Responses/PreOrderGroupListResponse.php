<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список групп предзаказов, сгруппированых по шаблонам предзаказов
 * source: manage/pre-order/responses/pre-order-group-list-response.json
 *
 * @property MessageV2[] $message
 * @property PreOrderGroupListResponseData $data
 */
final class PreOrderGroupListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
