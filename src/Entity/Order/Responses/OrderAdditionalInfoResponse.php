<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Имеющиеся добавочные данные для заполнения доверенности на самовывоз с/без факсимиле.
 * source: order/responses/order-additional-info-response.json
 *
 * @property MessageV2[] $message
 * @property OrderAdditionalInfoResponseData $data
 */
final class OrderAdditionalInfoResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
