<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem;

/**
 * Условия перевозки по направлению и companyBranchId
 * source: order/Common/objects/order-draft-expeditor-conditions.json
 *
 * @property float $vatRate
 * @property string $paymentDetails
 * @property string $currencyCode
 * @property bool $needEcn
 * @property ContractItem $expeditorContract
 * @property ExpeditorContractConclusionSettings $expeditorContractConclusion
 */
final class OrderDraftExpeditorConditions extends AbstractEntity
{
    protected static $types = [
        'vatRate' => ['float'],
        'paymentDetails' => ['string'],
        'currencyCode' => ['string'],
        'needEcn' => ['bool'],
        'expeditorContract' => ['Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects\ContractItem'],
        'expeditorContractConclusion' => [
            'Cargomart\ApiClient\Entity\Order\Common\Objects\ExpeditorContractConclusionSettings',
        ],
    ];

    protected static $nullables = [
        'vatRate' => false,
        'paymentDetails' => false,
        'currencyCode' => false,
        'needEcn' => false,
        'expeditorContract' => false,
        'expeditorContractConclusion' => false,
    ];
}
