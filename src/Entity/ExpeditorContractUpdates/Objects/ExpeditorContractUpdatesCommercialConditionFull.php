<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о коммерческом условии
 * source: expeditor-contract-updates/objects/expeditor-contract-updates-commercial-condition-full.json
 *
 * @property string $version
 * @property string $type
 * @property \stdClass $contentFile
 * @property \stdClass $signFile
 */
final class ExpeditorContractUpdatesCommercialConditionFull extends AbstractEntity
{
    protected static $types = [
        'version' => ['string'],
        'type' => ['string'],
        'contentFile' => ['\stdClass'],
        'signFile' => ['\stdClass'],
    ];

    protected static $nullables = ['version' => false, 'type' => false, 'contentFile' => true, 'signFile' => true];
}
