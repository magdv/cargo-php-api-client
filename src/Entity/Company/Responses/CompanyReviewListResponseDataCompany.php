<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-review-list-response.json#/properties/data/properties/company
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyReview;

/**
 * Компания
 * source: company/responses/company-review-list-response.json#/properties/data/properties/company
 *
 * @property string $id
 * @property CompanyReview[] $review
 */
final class CompanyReviewListResponseDataCompany extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'review' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyReview'],
    ];

    protected static $nullables = ['id' => false, 'review' => false];
}
