<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-review-comment-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Комментарий к отзыву на компанию
 * source: company/responses/company-review-comment-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyReviewCommentResponseData $data
 */
final class CompanyReviewCommentResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewCommentResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
