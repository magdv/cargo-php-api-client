<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Имеющиеся дополнительные данные для заполнения транспортной накладной.
 * source: order/responses/order-additional-info-waybill-response.json
 *
 * @property OrderAdditionalInfoWaybillResponseData $data
 */
final class OrderAdditionalInfoWaybillResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoWaybillResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
