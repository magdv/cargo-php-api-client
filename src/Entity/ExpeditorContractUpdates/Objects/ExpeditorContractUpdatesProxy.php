<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные доверенности подписанта
 * source: expeditor-contract-updates/objects/expeditor-contract-updates-proxy.json
 *
 * @property string $number
 * @property string $createDate
 * @property string $endDate
 */
final class ExpeditorContractUpdatesProxy extends AbstractEntity
{
    protected static $types = ['number' => ['string'], 'createDate' => ['string'], 'endDate' => ['string']];
    protected static $nullables = ['number' => false, 'createDate' => false, 'endDate' => false];
}
