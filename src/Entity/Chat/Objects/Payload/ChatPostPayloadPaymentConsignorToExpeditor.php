<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-payment-consignor-to-expeditor.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - информация об оплате счёта заказчиком экспедитору
 * source: chat/objects/payload/chat-post-payload-payment-consignor-to-expeditor.json
 *
 * @property string $number
 * @property string $date
 * @property string $value
 * @property string $currencyCode
 * @property ChatPostPayloadPaymentConsignorToExpeditorTransactionsItems[] $transactions
 */
final class ChatPostPayloadPaymentConsignorToExpeditor extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'value' => ['string'],
        'currencyCode' => ['string'],
        'transactions' => [
            'array',
            'Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadPaymentConsignorToExpeditorTransactionsItems',
        ],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'value' => false,
        'currencyCode' => false,
        'transactions' => false,
    ];
}
