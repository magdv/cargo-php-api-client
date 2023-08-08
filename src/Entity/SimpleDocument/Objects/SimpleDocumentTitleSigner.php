<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подписант титула
 * source: simple-document/objects/simple-document-title-signer.json
 *
 * @property string $id
 * @property int $serialId
 * @property int $signerId
 * @property string $signerName
 * @property string $certificateId
 * @property int $certificateSerialId
 * @property string $companyId
 * @property string $companyName
 * @property string $signDate
 */
final class SimpleDocumentTitleSigner extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'signerId' => ['int'],
        'signerName' => ['string'],
        'certificateId' => ['string'],
        'certificateSerialId' => ['int'],
        'companyId' => ['string'],
        'companyName' => ['string'],
        'signDate' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'signerId' => false,
        'signerName' => false,
        'certificateId' => false,
        'certificateSerialId' => false,
        'companyId' => false,
        'companyName' => false,
        'signDate' => false,
    ];
}
