<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-ecn-check-access-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Проверка доступа к созданию Электронной ТрН
 * source: order/responses/order-ecn-check-access-response.json
 *
 * @property OrderEcnCheckAccessResponseData $data
 * @property MessageV2[] $message
 */
final class OrderEcnCheckAccessResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderEcnCheckAccessResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
