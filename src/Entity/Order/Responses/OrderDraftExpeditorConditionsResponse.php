<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ на запрос условий перевозки
 * source: order/responses/order-draft-expeditor-conditions-response.json
 *
 * @property OrderDraftExpeditorConditionsResponseData $data
 */
final class OrderDraftExpeditorConditionsResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorConditionsResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
