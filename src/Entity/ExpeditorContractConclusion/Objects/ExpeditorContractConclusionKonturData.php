<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
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
 * @property string $okpo
 * @property int $legalStatusId
 * @property string $registrationDate
 * @property ExpeditorContractConclusionKonturDataSigners[] $signers
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
        'okpo' => ['string'],
        'legalStatusId' => ['int'],
        'registrationDate' => ['string'],
        'signers' => [
            'array',
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionKonturDataSigners',
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
        'okpo' => false,
        'legalStatusId' => false,
        'registrationDate' => false,
        'signers' => false,
    ];
}
