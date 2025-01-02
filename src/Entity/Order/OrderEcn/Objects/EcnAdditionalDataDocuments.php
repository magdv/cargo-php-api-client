<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillDocument;

/**
 * Сопроводительные документы
 * source: order/OrderEcn/objects/ecn-additional-data.json#/properties/documents
 *
 * @property WaybillDocument[] $sanitary
 * @property WaybillDocument[] $certificate
 * @property WaybillDocument[] $shipment
 */
final class EcnAdditionalDataDocuments extends AbstractEntity
{
    protected static $types = [
        'sanitary' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillDocument'],
        'certificate' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillDocument'],
        'shipment' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillDocument'],
    ];

    protected static $nullables = ['sanitary' => false, 'certificate' => false, 'shipment' => false];
}
