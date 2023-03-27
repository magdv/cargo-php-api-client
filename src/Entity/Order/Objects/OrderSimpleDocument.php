<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-simple-document.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment;

/**
 * Документы и список титулов заказа
 * source: order/objects/order-simple-document.json
 *
 * @property string $id
 * @property SimpleDocumentAssignment $expeditorAssignment
 * @property SimpleDocumentAssignment $carrierAssignment
 */
final class OrderSimpleDocument extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'expeditorAssignment' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment'],
        'carrierAssignment' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment'],
    ];

    protected static $nullables = ['id' => false, 'expeditorAssignment' => false, 'carrierAssignment' => false];
}
