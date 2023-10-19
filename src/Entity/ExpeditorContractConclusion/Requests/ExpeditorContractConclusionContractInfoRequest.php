<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Установка данных для заключения договора
 * source: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-contract-info-request.json
 *
 * @property string $taxSystem
 * @property string[] $carrierAbility
 * @property int $carTotalNumber
 * @property string $actualAddress
 * @property string $legalAddress
 * @property bool $isEqualityLegalAndActualAddress
 * @property bool $isInternationalCarriage
 */
final class ExpeditorContractConclusionContractInfoRequest extends AbstractEntity
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
