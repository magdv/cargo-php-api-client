<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SignedDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детальная информация содержимого подписанного документа
 * source: signed-document/objects/SignedDocument.json
 *
 * @property string $id
 * @property string $name
 * @property SignedDocumentTitle[] $titles
 * @property SignedDocumentAccess $access
 * @property string $date
 * @property string $number
 */
final class SignedDocument extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'name' => ['string'],
        'titles' => ['array', 'Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocumentTitle'],
        'access' => ['Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocumentAccess'],
        'date' => ['string'],
        'number' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'titles' => false,
        'access' => false,
        'date' => false,
        'number' => false,
    ];
}
