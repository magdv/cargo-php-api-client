<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные пунктов погрузки
 * source: chat/objects/payload/chat-post-payload-order.json#/properties/point
 *
 * @property string $localityName
 */
final class ChatPostPayloadOrderPoint extends AbstractEntity
{
    protected static $types = ['localityName' => ['string']];
    protected static $nullables = ['localityName' => false];
}
