<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ на создание/редактирование/просмотр черновика
 * source: order/responses/order-draft-expeditor-cru-response.json
 *
 * @property OrderDraftExpeditorCruResponseData $data
 */
final class OrderDraftExpeditorCruResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorCruResponseData']];
    protected static $nullables = ['data' => false];
}
