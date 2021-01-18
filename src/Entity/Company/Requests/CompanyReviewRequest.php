<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание нового отзыва на компанию
 * source: company/requests/company-review-request.json
 *
 * @property string $message
 */
final class CompanyReviewRequest extends AbstractEntity
{
    protected static $types = ['message' => ['string']];
    protected static $nullables = ['message' => false];
}
