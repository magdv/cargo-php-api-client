<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Группа презаказов
 * source: manage/pre-order/responses/pre-order-group-response.json
 *
 * @property MessageV2[] $message
 * @property PreOrderGroupResponseData $data
 */
final class PreOrderGroupResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
