<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отзыв на компанию
 * source: company/objects/company-review.json
 *
 * @property string $id
 * @property string $message
 * @property string $createDate
 * @property int $commentCount
 * @property \stdClass $company
 * @property \stdClass $contact
 * @property CompanyReviewAccess $access
 */
final class CompanyReview extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'message' => ['string'],
        'createDate' => ['string'],
        'commentCount' => ['int'],
        'company' => ['\stdClass'],
        'contact' => ['\stdClass'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyReviewAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'message' => false,
        'createDate' => false,
        'commentCount' => false,
        'company' => true,
        'contact' => true,
        'access' => false,
    ];
}
