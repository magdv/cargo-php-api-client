<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/expeditor-contract-conclusion-settings.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Настройки заключения договора с экспедитором
 * source: order/objects/expeditor-contract-conclusion-settings.json
 *
 * @property bool $isDeny
 * @property string $denyReason
 */
final class ExpeditorContractConclusionSettings extends AbstractEntity
{
    protected static $types = ['isDeny' => ['bool'], 'denyReason' => ['string']];
    protected static $nullables = ['isDeny' => false, 'denyReason' => false];
}
