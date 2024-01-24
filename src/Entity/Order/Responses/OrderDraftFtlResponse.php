<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ на создание/редактирование черновика FTL
 * source: order/responses/order-draft-ftl-response.json
 *
 * @property OrderDraftFtlResponseData $data
 */
final class OrderDraftFtlResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftFtlResponseData']];
    protected static $nullables = ['data' => false];
}
