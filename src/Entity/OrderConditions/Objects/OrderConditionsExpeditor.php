<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderConditions\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem;
use Cargomart\ApiClient\Entity\Order\Objects\ExpeditorContractConclusionSettings;

/**
 * Условия перевозки для работы с экспедитором
 * source: order-conditions/objects/order-conditions-expeditor.json
 *
 * @property string $paymentDetails
 * @property string $currencyCode
 * @property ContractItem $expeditorContract
 * @property ExpeditorContractConclusionSettings $expeditorContractConclusion
 */
final class OrderConditionsExpeditor extends AbstractEntity
{
    protected static $types = [
        'paymentDetails' => ['string'],
        'currencyCode' => ['string'],
        'expeditorContract' => ['Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem'],
        'expeditorContractConclusion' => ['Cargomart\ApiClient\Entity\Order\Objects\ExpeditorContractConclusionSettings'],
    ];

    protected static $nullables = [
        'paymentDetails' => false,
        'currencyCode' => false,
        'expeditorContract' => false,
        'expeditorContractConclusion' => false,
    ];
}
