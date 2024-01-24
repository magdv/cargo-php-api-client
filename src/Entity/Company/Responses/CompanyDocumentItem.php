<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * source: company/responses/company-document-item.json
 *
 * @property CompanyDocumentItemData $data
 */
final class CompanyDocumentItem extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyDocumentItemData']];
    protected static $nullables = ['data' => false];
}
