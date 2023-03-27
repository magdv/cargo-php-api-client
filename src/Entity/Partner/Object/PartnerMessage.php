<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: partner/object/partner-message.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Partner\Object;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект сообщения о партнерастве
 * source: partner/object/partner-message.json
 *
 * @property string $companyId
 * @property string $message
 * @property string $type
 */
final class PartnerMessage extends AbstractEntity
{
    protected static $types = ['companyId' => ['string'], 'message' => ['string'], 'type' => ['string']];
    protected static $nullables = ['companyId' => false, 'message' => false, 'type' => false];
}
