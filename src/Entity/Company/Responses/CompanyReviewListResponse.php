<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Отзывы компании
 * source: company/responses/company-review-list-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyReviewListResponseData $data
 */
final class CompanyReviewListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
