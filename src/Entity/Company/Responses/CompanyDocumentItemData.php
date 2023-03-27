<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-document-item.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\CompanyDocument;

/**
 * Список документов
 * source: company/responses/company-document-item.json#/properties/data
 *
 * @property CompanyDocument $document
 */
final class CompanyDocumentItemData extends AbstractEntity
{
    protected static $types = ['document' => ['Cargomart\ApiClient\Entity\Base\CompanyDocument']];
    protected static $nullables = ['document' => false];
}
