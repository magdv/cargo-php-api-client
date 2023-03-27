<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/company-review-comment.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Комментарий к отзыву на компанию
 * source: company/objects/company-review-comment.json
 *
 * @property string $id
 * @property string $message
 * @property string $createDate
 * @property string $companyId
 * @property int $contactId
 */
final class CompanyReviewComment extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'message' => ['string'],
        'createDate' => ['string'],
        'companyId' => ['string'],
        'contactId' => ['int'],
    ];

    protected static $nullables = [
        'id' => false,
        'message' => false,
        'createDate' => false,
        'companyId' => false,
        'contactId' => false,
    ];
}
