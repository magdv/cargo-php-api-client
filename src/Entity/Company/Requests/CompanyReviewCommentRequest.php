<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/requests/company-review-comment-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание комментария к отзыву на компанию
 * source: company/requests/company-review-comment-request.json
 *
 * @property string $message
 */
final class CompanyReviewCommentRequest extends AbstractEntity
{
    protected static $types = ['message' => ['string']];
    protected static $nullables = ['message' => false];
}
