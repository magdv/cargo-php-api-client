<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Комментарий к отзыву на компанию
 * source: company/responses/company-review-comment-response.json
 *
 * @property CompanyReviewCommentResponseData $data
 */
final class CompanyReviewCommentResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewCommentResponseData']];
    protected static $nullables = ['data' => false];
}
