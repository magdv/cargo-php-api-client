<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Данные
 * source: order/OrderActNonDeliveryCar/responses/OrderActNonDeliveryCarResponse.json
 *
 * @property DigitalActNonDeliveryCarResponseData $data
 * @property MessageV2[] $message
 */
final class DigitalActNonDeliveryCarResponse extends AbstractResponse
{
    protected static $types = [
        'data' => [
            'Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Responses\DigitalActNonDeliveryCarResponseData',
        ],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
