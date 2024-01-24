<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Отзывы компании
 * source: company/responses/company-review-list-response.json
 *
 * @property CompanyReviewListResponseData $data
 */
final class CompanyReviewListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewListResponseData']];
    protected static $nullables = ['data' => false];
}
