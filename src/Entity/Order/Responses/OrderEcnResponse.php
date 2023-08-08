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
 * Информация по ЭТрН заказа
 * source: order/responses/order-ecn-response.json
 *
 * @property MessageV2[] $message
 * @property OrderEcnResponseData $data
 */
final class OrderEcnResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderEcnResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
