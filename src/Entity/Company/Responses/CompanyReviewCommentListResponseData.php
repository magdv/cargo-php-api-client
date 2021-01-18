<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyReviewComment;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: company/responses/company-review-comment-list-response.json#/properties/data
 *
 * @property CompanyReviewComment[] $companyReviewComment
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class CompanyReviewCommentListResponseData extends AbstractEntity
{
    protected static $types = [
        'companyReviewComment' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyReviewComment'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['companyReviewComment' => false, 'company' => false, 'contact' => false];
}
