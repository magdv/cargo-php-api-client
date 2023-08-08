<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Сопроводительные документы
 * source: order/objects/ecn-additional-data.json#/properties/documents
 *
 * @property WaybillDocument[] $sanitary
 * @property WaybillDocument[] $certificate
 * @property WaybillDocument[] $shipment
 */
final class EcnAdditionalDataDocuments extends AbstractEntity
{
    protected static $types = [
        'sanitary' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WaybillDocument'],
        'certificate' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WaybillDocument'],
        'shipment' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WaybillDocument'],
    ];

    protected static $nullables = ['sanitary' => false, 'certificate' => false, 'shipment' => false];
}
