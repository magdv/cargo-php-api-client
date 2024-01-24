<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с документом заказа
 * source: order/responses/order-document-response.json
 *
 * @property OrderDocumentResponseData $data
 */
final class OrderDocumentResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDocumentResponseData']];
    protected static $nullables = ['data' => false];
}
