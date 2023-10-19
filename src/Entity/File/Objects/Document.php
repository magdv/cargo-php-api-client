<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект отслеживаний
 * source: file/objects/document.json
 *
 * @property int $id
 * @property int $clientId
 * @property string $companyId
 * @property int $typeId
 * @property string $title
 * @property int $status
 * @property int $size
 * @property int[] $fileId
 * @property FileV1[] $files
 * @property string $url
 * @property int $creatorId
 * @property string $createDate
 * @property bool $isShared
 * @property DocumentAccess $access
 */
final class Document extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'clientId' => ['int'],
        'companyId' => ['string'],
        'typeId' => ['int'],
        'title' => ['string'],
        'status' => ['int'],
        'size' => ['int'],
        'fileId' => ['array', 'int'],
        'files' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileV1'],
        'url' => ['string'],
        'creatorId' => ['int'],
        'createDate' => ['string'],
        'isShared' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\File\Objects\DocumentAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'clientId' => false,
        'companyId' => false,
        'typeId' => false,
        'title' => false,
        'status' => false,
        'size' => false,
        'fileId' => false,
        'files' => false,
        'url' => false,
        'creatorId' => false,
        'createDate' => false,
        'isShared' => false,
        'access' => false,
    ];
}
