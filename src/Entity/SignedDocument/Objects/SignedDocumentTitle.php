<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SignedDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Титул документа
 * source: signed-document/objects/SignedDocumentTitle.json
 *
 * @property string $id
 * @property string $createDate
 * @property SignedDocumentTitleSign $sign
 * @property string $type
 */
final class SignedDocumentTitle extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'createDate' => ['string'],
        'sign' => ['Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocumentTitleSign'],
        'type' => ['string'],
    ];

    protected static $nullables = ['id' => false, 'createDate' => false, 'sign' => false, 'type' => false];
}
