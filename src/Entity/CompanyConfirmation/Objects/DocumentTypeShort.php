<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/objects/document-type-short.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Типы документов
 * source: company-confirmation/objects/document-type-short.json
 *
 * @property string $id
 * @property string $name
 */
final class DocumentTypeShort extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
