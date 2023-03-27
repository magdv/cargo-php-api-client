<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/company-document.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Загруженные для общего доступа документы компании.
 * source: base/company-document.json
 *
 * @property int $id
 * @property string $companyId
 * @property string $companyName
 * @property string $title
 * @property DocumentFile[] $files
 * @property string $url
 * @property string $createDate
 * @property bool $isShared
 * @property CompanyDocumentAccess $access
 */
final class CompanyDocument extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'companyId' => ['string'],
        'companyName' => ['string'],
        'title' => ['string'],
        'files' => ['array', 'Cargomart\ApiClient\Entity\Base\DocumentFile'],
        'url' => ['string'],
        'createDate' => ['string'],
        'isShared' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Base\CompanyDocumentAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'companyId' => false,
        'companyName' => false,
        'title' => false,
        'files' => false,
        'url' => false,
        'createDate' => false,
        'isShared' => false,
        'access' => false,
    ];
}
