<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: configuration/objects/configuration-features.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступная функциональность
 * source: configuration/objects/configuration-features.json
 *
 * @property bool $smallCarrier
 * @property bool $orderFilterNew
 * @property bool $webSocket
 * @property bool $newOrderEditForm
 * @property bool $pricePrediction
 * @property bool $expeditorCustomer
 * @property bool $consignorExpeditorOrders
 * @property bool $expeditorCarrierDocuments
 * @property bool $newOrderEcnForm
 * @property bool $orderRoadmap
 */
final class ConfigurationFeatures extends AbstractEntity
{
    protected static $types = [
        'smallCarrier' => ['bool'],
        'orderFilterNew' => ['bool'],
        'webSocket' => ['bool'],
        'newOrderEditForm' => ['bool'],
        'pricePrediction' => ['bool'],
        'expeditorCustomer' => ['bool'],
        'consignorExpeditorOrders' => ['bool'],
        'expeditorCarrierDocuments' => ['bool'],
        'newOrderEcnForm' => ['bool'],
        'orderRoadmap' => ['bool'],
    ];

    protected static $nullables = [
        'smallCarrier' => false,
        'orderFilterNew' => false,
        'webSocket' => false,
        'newOrderEditForm' => false,
        'pricePrediction' => false,
        'expeditorCustomer' => false,
        'consignorExpeditorOrders' => false,
        'expeditorCarrierDocuments' => false,
        'newOrderEcnForm' => false,
        'orderRoadmap' => false,
    ];
}
