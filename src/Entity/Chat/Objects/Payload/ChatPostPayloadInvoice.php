<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-invoice.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - информация о платеже
 * source: chat/objects/payload/chat-post-payload-invoice.json
 *
 * @property string $number
 * @property string $date
 * @property string $value
 * @property string $currencyCode
 * @property ChatPostPayloadInvoicePaymentsItems[] $payments
 */
final class ChatPostPayloadInvoice extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'value' => ['string'],
        'currencyCode' => ['string'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadInvoicePaymentsItems'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'value' => false,
        'currencyCode' => false,
        'payments' => false,
    ];
}
