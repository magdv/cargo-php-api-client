<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статистика по тендеру
 * source: tender/objects/tender-request-stats.json
 *
 * @property float $numberOfLot
 * @property float $numberOfOffers
 * @property int $views
 * @property int $viewsCompany
 * @property int $viewsLot
 * @property int $viewsLotCompany
 */
final class TenderRequestStats extends AbstractEntity
{
    protected static $types = [
        'numberOfLot' => ['float'],
        'numberOfOffers' => ['float'],
        'views' => ['int'],
        'viewsCompany' => ['int'],
        'viewsLot' => ['int'],
        'viewsLotCompany' => ['int'],
    ];

    protected static $nullables = [
        'numberOfLot' => false,
        'numberOfOffers' => false,
        'views' => false,
        'viewsCompany' => false,
        'viewsLot' => false,
        'viewsLotCompany' => false,
    ];
}
