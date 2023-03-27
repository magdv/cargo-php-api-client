<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-contract.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект документа договора
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-contract.json
 *
 * @property string $number
 * @property string $generateStartDate
 * @property string $contractPdfUrl
 * @property string $contractHtmlUrl
 * @property string $issueCertificateUrl
 * @property string $issueCertificateFileId
 * @property string $contractFileId
 */
final class ExpeditorContractConclusionContract extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'generateStartDate' => ['string'],
        'contractPdfUrl' => ['string'],
        'contractHtmlUrl' => ['string'],
        'issueCertificateUrl' => ['string'],
        'issueCertificateFileId' => ['string'],
        'contractFileId' => ['string'],
    ];

    protected static $nullables = [
        'number' => false,
        'generateStartDate' => false,
        'contractPdfUrl' => false,
        'contractHtmlUrl' => false,
        'issueCertificateUrl' => false,
        'issueCertificateFileId' => false,
        'contractFileId' => false,
    ];
}
