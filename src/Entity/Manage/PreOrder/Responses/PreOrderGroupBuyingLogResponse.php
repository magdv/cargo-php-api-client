<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * История покупки/отмены презаказов в группе
 * source: manage/pre-order/responses/pre-order-group-buying-log-response.json
 *
 * @property MessageV2[] $message
 * @property PreOrderGroupBuyingLogResponseData $data
 */
final class PreOrderGroupBuyingLogResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupBuyingLogResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
