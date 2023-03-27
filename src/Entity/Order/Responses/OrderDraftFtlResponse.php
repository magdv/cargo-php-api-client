<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-draft-ftl-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ на создание/редактирование черновика FTL
 * source: order/responses/order-draft-ftl-response.json
 *
 * @property MessageV2[] $message
 * @property OrderDraftFtlResponseData $data
 */
final class OrderDraftFtlResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftFtlResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
