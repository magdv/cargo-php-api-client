<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Objects\ExpeditorPaymentTransaction;

/**
 * Данные для добавления платежей
 * source: expeditor/ProposalPayment/requests/proposal-payment-request.json
 *
 * @property string $number
 * @property string $date
 * @property string $status
 * @property string $value
 * @property ExpeditorPaymentTransaction[] $payments
 */
final class ProposalPaymentRequest extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'status' => ['string'],
        'value' => ['string'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Objects\ExpeditorPaymentTransaction'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'status' => false,
        'value' => false,
        'payments' => false,
    ];
}
