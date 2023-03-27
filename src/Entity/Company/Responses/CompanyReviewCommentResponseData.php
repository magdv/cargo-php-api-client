<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-review-comment-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyReview;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyReviewComment;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: company/responses/company-review-comment-response.json#/properties/data
 *
 * @property CompanyReviewComment $companyReviewComment
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 * @property CompanyReview $companyReview
 */
final class CompanyReviewCommentResponseData extends AbstractEntity
{
    protected static $types = [
        'companyReviewComment' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyReviewComment'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'companyReview' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyReview'],
    ];

    protected static $nullables = [
        'companyReviewComment' => false,
        'company' => false,
        'contact' => false,
        'companyReview' => false,
    ];
}
