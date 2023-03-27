<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/models/tender-company-stat.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Models;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о компании в разрезе списка статистики
 * source: tender/models/tender-company-stat.json
 *
 * @property string $companyId
 * @property bool $isNotify
 * @property bool $isView
 * @property bool $isOffer
 */
final class TenderCompanyStat extends AbstractEntity
{
    protected static $types = [
        'companyId' => ['string'],
        'isNotify' => ['bool'],
        'isView' => ['bool'],
        'isOffer' => ['bool'],
    ];

    protected static $nullables = ['companyId' => false, 'isNotify' => false, 'isView' => false, 'isOffer' => false];
}
