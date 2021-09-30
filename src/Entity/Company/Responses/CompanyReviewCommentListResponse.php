<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Комментарии к отзыву на компанию
 * source: company/responses/company-review-comment-list-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyReviewCommentListResponseData $data
 */
final class CompanyReviewCommentListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewCommentListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
