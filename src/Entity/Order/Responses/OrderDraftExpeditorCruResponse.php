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
 * Ответ на создание/редактирование/просмотр черновика
 * source: order/responses/order-draft-expeditor-cru-response.json
 *
 * @property MessageV2[] $message
 * @property OrderDraftExpeditorCruResponseData $data
 */
final class OrderDraftExpeditorCruResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorCruResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
