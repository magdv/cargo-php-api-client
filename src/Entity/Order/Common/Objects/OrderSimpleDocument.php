<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCar;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment;

/**
 * Документы и список титулов заказа
 * source: order/Common/objects/order-simple-document.json
 *
 * @property string $id
 * @property SimpleDocumentAssignment $expeditorAssignment
 * @property SimpleDocumentAssignment $carrierAssignment
 * @property DigitalActNonDeliveryCar $actNonDeliveryCar
 */
final class OrderSimpleDocument extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'expeditorAssignment' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment'],
        'carrierAssignment' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment'],
        'actNonDeliveryCar' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCar'],
    ];

    protected static $nullables = [
        'id' => false,
        'expeditorAssignment' => false,
        'carrierAssignment' => false,
        'actNonDeliveryCar' => false,
    ];
}
