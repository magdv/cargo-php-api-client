<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список клиентов из списка доступа
 * source: order/responses/order-point-edit-response.json
 *
 * @property OrderPointEditResponseData $data
 * @property MessageV2[] $message
 */
final class OrderPointEditResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPointEditResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
