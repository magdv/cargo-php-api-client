<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileV2;

/**
 * Информация о коммерческом условии
 * source: expeditor-carrier-contract/objects/commercial-condition.json
 *
 * @property string $version
 * @property string $startDate
 * @property string $endDate
 * @property string $type
 * @property FileV2 $contentFile
 * @property FileV2 $signFile
 */
final class ExpeditorCarrierContractCommercialCondition extends AbstractEntity
{
    protected static $types = [
        'version' => ['string'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'type' => ['string'],
        'contentFile' => ['Cargomart\ApiClient\Entity\File\Objects\FileV2'],
        'signFile' => ['Cargomart\ApiClient\Entity\File\Objects\FileV2'],
    ];

    protected static $nullables = [
        'version' => false,
        'startDate' => false,
        'endDate' => false,
        'type' => false,
        'contentFile' => false,
        'signFile' => false,
    ];
}
