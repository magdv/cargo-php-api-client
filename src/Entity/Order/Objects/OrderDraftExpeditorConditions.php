<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem;

/**
 * Условия перевозки по направлению и companyBranchId
 * source: order/objects/order-draft-expeditor-conditions.json
 *
 * @property float $vatRate
 * @property string $paymentDetails
 * @property string $currencyCode
 * @property ContractItem $expeditorContract
 * @property ExpeditorContractConclusionSettings $expeditorContractConclusion
 */
final class OrderDraftExpeditorConditions extends AbstractEntity
{
    protected static $types = [
        'vatRate' => ['float'],
        'paymentDetails' => ['string'],
        'currencyCode' => ['string'],
        'expeditorContract' => ['Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem'],
        'expeditorContractConclusion' => ['Cargomart\ApiClient\Entity\Order\Objects\ExpeditorContractConclusionSettings'],
    ];

    protected static $nullables = [
        'vatRate' => false,
        'paymentDetails' => false,
        'currencyCode' => false,
        'expeditorContract' => false,
        'expeditorContractConclusion' => false,
    ];
}
