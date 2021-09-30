<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * История изменения группы презаказов
 * source: manage/pre-order/responses/pre-order-group-changing-log-response.json
 *
 * @property MessageV2[] $message
 * @property PreOrderGroupChangingLogResponseData $data
 */
final class PreOrderGroupChangingLogResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupChangingLogResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
