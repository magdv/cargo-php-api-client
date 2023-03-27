<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект состояния заключения договора
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion.json
 *
 * @property string $status
 * @property ExpeditorContractConclusionKonturData $konturData
 * @property ExpeditorContractConclusionContractInfo $contractInfo
 * @property ExpeditorContractConclusionSigner $signer
 * @property ExpeditorContractConclusionIssueCertificate $issueCertificate
 * @property ExpeditorContractConclusionContract $contract
 * @property string $signingMethod
 * @property string $signingEdmName
 * @property string $contractSendDate
 * @property string $refuseMessage
 * @property ExpeditorContractConclusionHistory $history
 * @property string $createDate
 * @property string $creatorName
 * @property string $corsaDocumentUrl
 * @property string $contractTemplateUrl
 * @property int $creatorId
 * @property string $comment
 * @property ExpeditorContractConclusionAccess $access
 */
final class ExpeditorContractConclusion extends AbstractEntity
{
    protected static $types = [
        'status' => ['string'],
        'konturData' => [
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionKonturData',
        ],
        'contractInfo' => [
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionContractInfo',
        ],
        'signer' => ['Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionSigner'],
        'issueCertificate' => [
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionIssueCertificate',
        ],
        'contract' => [
            'Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionContract',
        ],
        'signingMethod' => ['string'],
        'signingEdmName' => ['string'],
        'contractSendDate' => ['string'],
        'refuseMessage' => ['string'],
        'history' => ['Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionHistory'],
        'createDate' => ['string'],
        'creatorName' => ['string'],
        'corsaDocumentUrl' => ['string'],
        'contractTemplateUrl' => ['string'],
        'creatorId' => ['int'],
        'comment' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects\ExpeditorContractConclusionAccess'],
    ];

    protected static $nullables = [
        'status' => false,
        'konturData' => false,
        'contractInfo' => false,
        'signer' => false,
        'issueCertificate' => false,
        'contract' => false,
        'signingMethod' => false,
        'signingEdmName' => false,
        'contractSendDate' => false,
        'refuseMessage' => false,
        'history' => false,
        'createDate' => false,
        'creatorName' => false,
        'corsaDocumentUrl' => false,
        'contractTemplateUrl' => false,
        'creatorId' => false,
        'comment' => false,
        'access' => false,
    ];
}
