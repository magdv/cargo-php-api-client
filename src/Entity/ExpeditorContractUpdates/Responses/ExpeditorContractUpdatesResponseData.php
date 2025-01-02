<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects\ExpeditorContractUpdatesState;

/**
 * source: expeditor-contract-updates/responses/expeditor-contract-updates-response.json#/properties/data
 *
 * @property ExpeditorContractUpdatesState $contractUpdates
 */
final class ExpeditorContractUpdatesResponseData extends AbstractEntity
{
    protected static $types = [
        'contractUpdates' => ['Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects\ExpeditorContractUpdatesState'],
    ];

    protected static $nullables = ['contractUpdates' => false];
}
