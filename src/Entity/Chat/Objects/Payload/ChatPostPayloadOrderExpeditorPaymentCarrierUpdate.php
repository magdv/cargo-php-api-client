<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - информация о платеже
 * source: chat/objects/payload/chat-post-payload-order-expeditor-payment-carrier-update.json
 *
 * @property string $type
 * @property string $number
 * @property string $date
 * @property string $value
 * @property string $currencyCode
 * @property ChatPostPayloadOrderExpeditorPaymentCarrierUpdatePayments[] $payments
 */
final class ChatPostPayloadOrderExpeditorPaymentCarrierUpdate extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'number' => ['string'],
        'date' => ['string'],
        'value' => ['string'],
        'currencyCode' => ['string'],
        'payments' => [
            'array',
            'Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadOrderExpeditorPaymentCarrierUpdatePayments',
        ],
    ];

    protected static $nullables = [
        'type' => false,
        'number' => false,
        'date' => false,
        'value' => false,
        'currencyCode' => false,
        'payments' => false,
    ];
}
