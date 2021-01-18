<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\CompanyDocument;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * Список опубликованных документов
 * source: company/responses/company-document-list.json#/properties/data
 *
 * @property CompanyDocument[] $document
 * @property Pagination $pagination
 */
final class CompanyDocumentListData extends AbstractEntity
{
    protected static $types = [
        'document' => ['array', 'Cargomart\ApiClient\Entity\Base\CompanyDocument'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['document' => false, 'pagination' => false];
}
