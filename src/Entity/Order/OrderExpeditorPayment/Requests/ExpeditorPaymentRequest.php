<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Objects\ExpeditorPaymentTransaction;

/**
 * Данные для добавления платежей
 * source: order/OrderExpeditorPayment/requests/expeditor-payment-request.json
 *
 * @property string $number
 * @property string $date
 * @property string $status
 * @property string $value
 * @property ExpeditorPaymentTransaction[] $payments
 * @property int $version
 */
final class ExpeditorPaymentRequest extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'status' => ['string'],
        'value' => ['string'],
        'payments' => [
            'array',
            'Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Objects\ExpeditorPaymentTransaction',
        ],
        'version' => ['int'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'status' => false,
        'value' => false,
        'payments' => false,
        'version' => false,
    ];
}
