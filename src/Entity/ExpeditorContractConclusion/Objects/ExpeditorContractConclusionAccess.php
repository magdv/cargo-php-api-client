<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Права доступа к методам работы с заключением договора
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-access.json
 *
 * @property bool $create
 * @property bool $delete
 * @property bool $createStatus
 * @property bool $createKonturDataApprove
 * @property bool $createContractInfo
 * @property bool $createSigner
 * @property bool $createIssueCertificate
 * @property bool $createIssueCertificatePhone
 * @property bool $createIssueCertificatePhoneConfirm
 * @property bool $createIsSigningMethod
 */
final class ExpeditorContractConclusionAccess extends AbstractEntity
{
    protected static $types = [
        'create' => ['bool'],
        'delete' => ['bool'],
        'createStatus' => ['bool'],
        'createKonturDataApprove' => ['bool'],
        'createContractInfo' => ['bool'],
        'createSigner' => ['bool'],
        'createIssueCertificate' => ['bool'],
        'createIssueCertificatePhone' => ['bool'],
        'createIssueCertificatePhoneConfirm' => ['bool'],
        'createIsSigningMethod' => ['bool'],
    ];

    protected static $nullables = [
        'create' => false,
        'delete' => false,
        'createStatus' => false,
        'createKonturDataApprove' => false,
        'createContractInfo' => false,
        'createSigner' => false,
        'createIssueCertificate' => false,
        'createIssueCertificatePhone' => false,
        'createIssueCertificatePhoneConfirm' => false,
        'createIsSigningMethod' => false,
    ];
}
