<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-kontur-data.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные об организации из Контура
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-kontur-data.json
 *
 * @property string $shortName
 * @property string $fullName
 * @property string $legalAddress
 * @property string $headName
 * @property string $headPosition
 * @property string $inn
 * @property string $ogrn
 * @property int $legalStatusId
 * @property string $registrationDate
 * @property ExpeditorContractConclusionKonturDataSignersItems[] $signers
 */
final class ExpeditorContractConclusionKonturData extends AbstractEntity
{
    protected static $types = [
        'shortName' => ['string'],
        'fullName' => ['string'],
        'legalAddress' => ['string'],
        'headName' => ['string'],
        'headPosition' => ['string'],
        'inn' => ['string'],
        'ogrn' => ['string'],
        'legalStatusId' => ['int'],
        'registrationDate' => ['string'],
        'signers' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionKonturDataSignersItems',
        ],
    ];

    protected static $nullables = [
        'shortName' => false,
        'fullName' => false,
        'legalAddress' => false,
        'headName' => false,
        'headPosition' => false,
        'inn' => false,
        'ogrn' => false,
        'legalStatusId' => false,
        'registrationDate' => false,
        'signers' => false,
    ];
}
