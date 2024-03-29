<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Файл на валидации
 * source: company-confirmation/objects/file-on-validation.json
 *
 * @property int $id
 * @property string $type
 * @property string $documentType
 * @property string $mimeType
 * @property string $name
 * @property int $size
 * @property string $url
 * @property FileOnValidationAccess $access
 */
final class FileOnValidation extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'type' => ['string'],
        'documentType' => ['string'],
        'mimeType' => ['string'],
        'name' => ['string'],
        'size' => ['int'],
        'url' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\FileOnValidationAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'type' => false,
        'documentType' => false,
        'mimeType' => false,
        'name' => false,
        'size' => false,
        'url' => false,
        'access' => false,
    ];
}
