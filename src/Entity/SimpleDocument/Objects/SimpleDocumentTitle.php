<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детали титула в документе
 * source: simple-document/objects/simple-document-title.json
 *
 * @property string $id
 * @property string $type
 * @property SimpleDocumentTitleSigner[] $signer
 */
final class SimpleDocumentTitle extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'type' => ['string'],
        'signer' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentTitleSigner'],
    ];

    protected static $nullables = ['id' => false, 'type' => false, 'signer' => false];
}
