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
 * Расширенные данные для заполнения транспортной накладной.
 * source: order/responses/waybill-additional-data-response.json
 *
 * @property MessageV2[] $message
 * @property WaybillAdditionalDataResponseData $data
 */
final class WaybillAdditionalDataResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\WaybillAdditionalDataResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
