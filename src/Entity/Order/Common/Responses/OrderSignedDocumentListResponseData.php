<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument;

/**
 * source: order/Common/responses/OrderSignedDocumentListResponse.json#/properties/data
 *
 * @property SignedDocument[] $signedDocuments
 */
final class OrderSignedDocumentListResponseData extends AbstractEntity
{
    protected static $types = [
        'signedDocuments' => ['array', 'Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument'],
    ];

    protected static $nullables = ['signedDocuments' => false];
}
