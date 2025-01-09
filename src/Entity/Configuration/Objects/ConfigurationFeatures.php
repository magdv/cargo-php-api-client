<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступная функциональность
 * source: configuration/objects/configuration-features.json
 *
 * @property bool $consignorExpeditorOrders
 * @property bool $expeditorCarrierDocuments
 * @property bool $expeditorCustomer
 * @property bool $newOrderEditForm
 * @property bool $commonDraft
 * @property bool $oneOrderList
 * @property bool $orderDowntimeClaim
 * @property bool $orderFilterNew
 * @property bool $orderRoadmap
 * @property bool $pricePrediction
 * @property bool $smallCarrier
 * @property bool $webSocket
 */
final class ConfigurationFeatures extends AbstractEntity
{
    protected static $types = [
        'consignorExpeditorOrders' => ['bool'],
        'expeditorCarrierDocuments' => ['bool'],
        'expeditorCustomer' => ['bool'],
        'newOrderEditForm' => ['bool'],
        'commonDraft' => ['bool'],
        'oneOrderList' => ['bool'],
        'orderDowntimeClaim' => ['bool'],
        'orderFilterNew' => ['bool'],
        'orderRoadmap' => ['bool'],
        'pricePrediction' => ['bool'],
        'smallCarrier' => ['bool'],
        'webSocket' => ['bool'],
    ];

    protected static $nullables = [
        'consignorExpeditorOrders' => false,
        'expeditorCarrierDocuments' => false,
        'expeditorCustomer' => false,
        'newOrderEditForm' => false,
        'commonDraft' => false,
        'oneOrderList' => false,
        'orderDowntimeClaim' => false,
        'orderFilterNew' => false,
        'orderRoadmap' => false,
        'pricePrediction' => false,
        'smallCarrier' => false,
        'webSocket' => false,
    ];
}
