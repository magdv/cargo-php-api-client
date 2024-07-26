<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Проверка доступа к созданию Электронной ТрН
 * source: order/OrderEcn/responses/order-ecn-check-access-response.json
 *
 * @property OrderEcnCheckAccessResponseData $data
 * @property MessageV2[] $message
 */
final class OrderEcnCheckAccessResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderEcn\Responses\OrderEcnCheckAccessResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
