<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: chat/objects/payload/chat-post-payload-expeditor-payment.json#/properties/payments
 *
 * @property string $date
 * @property string $value
 */
final class ChatPostPayloadExpeditorPaymentPayments extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'value' => ['string']];
    protected static $nullables = ['date' => false, 'value' => false];
}
