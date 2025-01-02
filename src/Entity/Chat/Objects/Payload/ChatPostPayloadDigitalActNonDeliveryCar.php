<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileV2;

/**
 * Акт о неподаче машины
 * source: chat/objects/payload/chat-post-payload-digital-act-non-delivery-car.json
 *
 * @property string $type
 * @property FileV2 $file
 */
final class ChatPostPayloadDigitalActNonDeliveryCar extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'file' => ['Cargomart\ApiClient\Entity\File\Objects\FileV2']];
    protected static $nullables = ['type' => false, 'file' => false];
}
