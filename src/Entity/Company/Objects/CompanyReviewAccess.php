<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект доступов
 * source: company/objects/company-review.json#/properties/access
 *
 * @property bool $viewComment
 * @property bool $createComment
 */
final class CompanyReviewAccess extends AbstractEntity
{
    protected static $types = ['viewComment' => ['bool'], 'createComment' => ['bool']];
    protected static $nullables = ['viewComment' => false, 'createComment' => false];
}
