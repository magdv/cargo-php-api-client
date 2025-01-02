<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Единица данных в банковских реквизитах
 * source: expeditor/Common/objects/banking-details-value.json
 *
 * @property string $value
 * @property string $denyReason
 */
final class BankingDetailsValue extends AbstractEntity
{
    protected static $types = ['value' => ['string'], 'denyReason' => ['string']];
    protected static $nullables = ['value' => false, 'denyReason' => false];
}
