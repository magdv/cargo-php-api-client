<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDocument;

/**
 * source: order/responses/order-document-response.json#/properties/data
 *
 * @property OrderDocument $orderDocument
 */
final class OrderDocumentResponseData extends AbstractEntity
{
    protected static $types = ['orderDocument' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDocument']];
    protected static $nullables = ['orderDocument' => false];
}
