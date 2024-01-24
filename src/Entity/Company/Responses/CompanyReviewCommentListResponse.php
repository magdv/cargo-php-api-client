<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Комментарии к отзыву на компанию
 * source: company/responses/company-review-comment-list-response.json
 *
 * @property CompanyReviewCommentListResponseData $data
 */
final class CompanyReviewCommentListResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewCommentListResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
