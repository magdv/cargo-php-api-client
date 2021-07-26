<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\SimpleDocumentAssignment;

/**
 * source: order/responses/order-simple-document-response.json#/properties/data#/properties/simpleDocument
 *
 * @property string $id
 * @property SimpleDocumentAssignment $expeditorAssignment
 * @property SimpleDocumentAssignment $carrierAssignment
 */
final class OrderSimpleDocumentResponseDataSimpleDocument extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'expeditorAssignment' => ['Cargomart\ApiClient\Entity\Order\Objects\SimpleDocumentAssignment'],
        'carrierAssignment' => ['Cargomart\ApiClient\Entity\Order\Objects\SimpleDocumentAssignment'],
    ];

    protected static $nullables = ['id' => false, 'expeditorAssignment' => false, 'carrierAssignment' => false];
}
