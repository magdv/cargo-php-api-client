<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-contract-info.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для заключения договора
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-contract-info.json
 *
 * @property string $taxSystem
 * @property string[] $carrierAbility
 * @property int $carTotalNumber
 * @property string $actualAddress
 * @property string $legalAddress
 * @property bool $isEqualityLegalAndActualAddress
 * @property bool $isInternationalCarriage
 */
final class ExpeditorContractConclusionContractInfo extends AbstractEntity
{
    protected static $types = [
        'taxSystem' => ['string'],
        'carrierAbility' => ['array', 'string'],
        'carTotalNumber' => ['int'],
        'actualAddress' => ['string'],
        'legalAddress' => ['string'],
        'isEqualityLegalAndActualAddress' => ['bool'],
        'isInternationalCarriage' => ['bool'],
    ];

    protected static $nullables = [
        'taxSystem' => false,
        'carrierAbility' => false,
        'carTotalNumber' => false,
        'actualAddress' => false,
        'legalAddress' => false,
        'isEqualityLegalAndActualAddress' => false,
        'isInternationalCarriage' => false,
    ];
}
