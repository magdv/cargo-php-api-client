<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детали титула в документе
 * source: order/objects/simple-document-title.json
 *
 * @property string $id
 * @property string $status
 * @property SimpleDocumentTitleSigner $signer
 */
final class SimpleDocumentTitle extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'status' => ['string'],
        'signer' => ['Cargomart\ApiClient\Entity\Order\Objects\SimpleDocumentTitleSigner'],
    ];

    protected static $nullables = ['id' => false, 'status' => false, 'signer' => false];
}
