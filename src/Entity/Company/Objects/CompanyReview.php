<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Отзыв на компанию
 * source: company/objects/company-review.json
 *
 * @property string $id
 * @property string $message
 * @property string $createDate
 * @property int $commentCount
 * @property CompanyShort $company
 * @property UserContactShort $contact
 * @property CompanyReviewAccess $access
 */
final class CompanyReview extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'message' => ['string'],
        'createDate' => ['string'],
        'commentCount' => ['int'],
        'company' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyReviewAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'message' => false,
        'createDate' => false,
        'commentCount' => false,
        'company' => false,
        'contact' => false,
        'access' => false,
    ];
}
