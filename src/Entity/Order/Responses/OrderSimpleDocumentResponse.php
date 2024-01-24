<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Документы и список титулов заказа
 * source: order/responses/order-simple-document-response.json
 *
 * @property OrderSimpleDocumentResponseData $data
 */
final class OrderSimpleDocumentResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderSimpleDocumentResponseData']];
    protected static $nullables = ['data' => false];
}
