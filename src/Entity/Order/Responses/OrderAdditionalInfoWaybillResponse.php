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
 * Имеющиеся дополнительные данные для заполнения транспортной накладной.
 * source: order/responses/order-additional-info-waybill-response.json
 *
 * @property OrderAdditionalInfoWaybillResponseData $data
 * @property MessageV2[] $message
 */
final class OrderAdditionalInfoWaybillResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoWaybillResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
