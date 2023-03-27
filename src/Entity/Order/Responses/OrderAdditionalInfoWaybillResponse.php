<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-additional-info-waybill-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Имеющиеся дополнительные данные для заполнения транспортной накладной.
 * source: order/responses/order-additional-info-waybill-response.json
 *
 * @property MessageV2[] $message
 * @property OrderAdditionalInfoWaybillResponseData $data
 */
final class OrderAdditionalInfoWaybillResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoWaybillResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
