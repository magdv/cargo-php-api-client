<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Рекомендация даты погрузки по заявке от Экспедитора Отправителю
 * source: expeditor/objects/proposal-loading-date-recommendation.json
 *
 * @property string $type
 * @property string $value
 */
final class ProposalLoadingDateRecommendation extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'value' => ['string']];
    protected static $nullables = ['type' => false, 'value' => false];
}
