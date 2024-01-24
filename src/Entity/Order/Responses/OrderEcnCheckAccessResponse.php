<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Проверка доступа к созданию Электронной ТрН
 * source: order/responses/order-ecn-check-access-response.json
 *
 * @property OrderEcnCheckAccessResponseData $data
 */
final class OrderEcnCheckAccessResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderEcnCheckAccessResponseData']];
    protected static $nullables = ['data' => false];
}
