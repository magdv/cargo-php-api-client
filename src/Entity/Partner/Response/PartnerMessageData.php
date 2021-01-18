<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Partner\Response;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Partner\Object\PartnerMessage;

/**
 * source: partner/response/partner-message.json#/properties/data
 *
 * @property PartnerMessage $message
 */
final class PartnerMessageData extends AbstractEntity
{
    protected static $types = ['message' => ['Cargomart\ApiClient\Entity\Partner\Object\PartnerMessage']];
    protected static $nullables = ['message' => false];
}
