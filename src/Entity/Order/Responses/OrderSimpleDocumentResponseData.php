<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/responses/order-simple-document-response.json#/properties/data
 *
 * @property OrderSimpleDocumentResponseDataSimpleDocument $simpleDocument
 */
final class OrderSimpleDocumentResponseData extends AbstractEntity
{
    protected static $types = [
        'simpleDocument' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderSimpleDocumentResponseDataSimpleDocument'],
    ];

    protected static $nullables = ['simpleDocument' => false];
}
