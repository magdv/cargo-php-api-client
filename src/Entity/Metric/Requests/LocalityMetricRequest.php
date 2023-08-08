<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Metric\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание записи метрики для поиска по пунктам отправления/назначения
 * source: metric/requests/locality-metric-request.json
 *
 * @property string $localityFilter
 * @property string $localitySort
 * @property string $page
 * @property string $fieldName
 * @property string $localityCode
 * @property int $localityIndex
 * @property string $searchQuery
 * @property string $initialLocalityCode
 * @property int $eventDuration
 */
final class LocalityMetricRequest extends AbstractEntity
{
    protected static $types = [
        'localityFilter' => ['string'],
        'localitySort' => ['string'],
        'page' => ['string'],
        'fieldName' => ['string'],
        'localityCode' => ['string'],
        'localityIndex' => ['int'],
        'searchQuery' => ['string'],
        'initialLocalityCode' => ['string'],
        'eventDuration' => ['int'],
    ];

    protected static $nullables = [
        'localityFilter' => false,
        'localitySort' => false,
        'page' => false,
        'fieldName' => false,
        'localityCode' => false,
        'localityIndex' => false,
        'searchQuery' => false,
        'initialLocalityCode' => false,
        'eventDuration' => false,
    ];
}
