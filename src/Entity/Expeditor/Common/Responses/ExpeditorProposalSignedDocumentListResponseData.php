<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument;

/**
 * source: expeditor/Common/responses/ExpeditorProposalSignedDocumentListResponse.json#/properties/data
 *
 * @property SignedDocument[] $signedDocuments
 */
final class ExpeditorProposalSignedDocumentListResponseData extends AbstractEntity
{
    protected static $types = [
        'signedDocuments' => ['array', 'Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument'],
    ];

    protected static $nullables = ['signedDocuments' => false];
}
