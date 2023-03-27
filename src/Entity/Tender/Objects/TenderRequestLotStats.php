<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-request-lot-stats.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статистика по тендеру
 * source: tender/objects/tender-request-lot-stats.json
 *
 * @property float $numberOfOffers
 * @property int $views
 * @property int $viewsCompany
 */
final class TenderRequestLotStats extends AbstractEntity
{
    protected static $types = ['numberOfOffers' => ['float'], 'views' => ['int'], 'viewsCompany' => ['int']];
    protected static $nullables = ['numberOfOffers' => false, 'views' => false, 'viewsCompany' => false];
}
