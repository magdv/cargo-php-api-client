<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\ExpeditorPaymentTransaction;

/**
 * Данные для добавления платежей
 * source: expeditor/requests/proposal-payment-request.json
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
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ExpeditorPaymentTransaction'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'status' => false,
        'value' => false,
        'payments' => false,
    ];
}
