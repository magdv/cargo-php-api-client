<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SignedDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о подписи титула
 * source: signed-document/objects/SignedDocumentTitleSign.json
 *
 * @property string $id
 * @property int $serialId
 * @property SignedDocumentUserCertificate $certificate
 * @property string $signDate
 * @property string $signerRole
 */
final class SignedDocumentTitleSign extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'certificate' => ['Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocumentUserCertificate'],
        'signDate' => ['string'],
        'signerRole' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'certificate' => false,
        'signDate' => false,
        'signerRole' => false,
    ];
}
