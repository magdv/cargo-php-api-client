<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Документы и список титулов заказа
 * source: order/responses/order-simple-document-response.json
 *
 * @property MessageV2[] $message
 * @property OrderSimpleDocumentResponseData $data
 */
final class OrderSimpleDocumentResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderSimpleDocumentResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
