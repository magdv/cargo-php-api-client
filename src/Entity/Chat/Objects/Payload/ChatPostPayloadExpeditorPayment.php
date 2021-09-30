<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - информация о платеже
 * source: chat/objects/payload/chat-post-payload-expeditor-payment.json
 *
 * @property string $number
 * @property string $date
 * @property string $value
 * @property string $currencyCode
 * @property ChatPostPayloadExpeditorPaymentPayments[] $payments
 */
final class ChatPostPayloadExpeditorPayment extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'value' => ['string'],
        'currencyCode' => ['string'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadExpeditorPaymentPayments'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'value' => false,
        'currencyCode' => false,
        'payments' => false,
    ];
}
