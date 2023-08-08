<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Tender\Models\TenderCompanyStat;

/**
 * source: tender/responses/tender-company-stat-list-response.json#/properties/data
 *
 * @property TenderCompanyStat[] $stats
 * @property CompanyShort[] $company
 * @property Pagination $pagination
 */
final class TenderCompanyStatListResponseData extends AbstractEntity
{
    protected static $types = [
        'stats' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderCompanyStat'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['stats' => false, 'company' => false, 'pagination' => false];
}
