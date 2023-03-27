<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyInfo;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: company/responses/company-list-response.json#/properties/data
 *
 * @property CompanyInfo[] $company
 * @property UserContactShort[] $contact
 * @property Pagination $pagination
 */
final class CompanyListResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyInfo'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['company' => false, 'contact' => false, 'pagination' => false];
}
