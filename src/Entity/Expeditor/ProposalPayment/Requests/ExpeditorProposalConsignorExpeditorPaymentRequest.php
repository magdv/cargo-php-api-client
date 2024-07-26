<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentTransaction;

/**
 * Добавление информации оплаты по счёту
 * source: expeditor/ProposalPayment/requests/expeditor-proposal-consignor-expeditor-payment-request.json
 *
 * @property string $number
 * @property string $date
 * @property string $status
 * @property string $statusDateTime
 * @property string $value
 * @property PaymentTransaction[] $transactions
 * @property int $version
 */
final class ExpeditorProposalConsignorExpeditorPaymentRequest extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'status' => ['string'],
        'statusDateTime' => ['string'],
        'value' => ['string'],
        'transactions' => ['array', 'Cargomart\ApiClient\Entity\Payment\Objects\PaymentTransaction'],
        'version' => ['int'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'status' => false,
        'statusDateTime' => false,
        'value' => false,
        'transactions' => false,
        'version' => false,
    ];
}
