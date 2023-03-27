<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-review-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: company/responses/company-review-list-response.json#/properties/data
 *
 * @property CompanyReviewListResponseDataCompany $company
 */
final class CompanyReviewListResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewListResponseDataCompany'],
    ];

    protected static $nullables = ['company' => false];
}
