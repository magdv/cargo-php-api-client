<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ списка email для точек
 * source: order/responses/order-proxy-email-response.json
 *
 * @property OrderProxyEmailResponseData $data
 */
final class OrderProxyEmailResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderProxyEmailResponseData']];
    protected static $nullables = ['data' => false];
}
