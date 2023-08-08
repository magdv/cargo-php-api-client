<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderSimpleDocument;

/**
 * source: order/responses/order-simple-document-response.json#/properties/data
 *
 * @property OrderSimpleDocument $order
 */
final class OrderSimpleDocumentResponseData extends AbstractEntity
{
    protected static $types = ['order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderSimpleDocument']];
    protected static $nullables = ['order' => false];
}
