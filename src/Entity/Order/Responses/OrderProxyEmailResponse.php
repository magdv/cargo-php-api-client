<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-proxy-email-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ списка email для точек
 * source: order/responses/order-proxy-email-response.json
 *
 * @property MessageV2[] $message
 * @property OrderProxyEmailResponseData $data
 */
final class OrderProxyEmailResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderProxyEmailResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
