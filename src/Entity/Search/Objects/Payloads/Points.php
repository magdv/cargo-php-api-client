<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: search/objects/payloads/points.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Search\Objects\Payloads;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные маршрутного пункта
 * source: search/objects/payloads/points.json
 *
 * @property int $id
 * @property string $type
 * @property string $fromDate
 * @property string $localityName
 */
final class Points extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'type' => ['string'],
        'fromDate' => ['string'],
        'localityName' => ['string'],
    ];

    protected static $nullables = ['id' => false, 'type' => false, 'fromDate' => false, 'localityName' => false];
}
