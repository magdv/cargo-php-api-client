<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Advert\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект рекламного объявления
 * source: advert/objects/ad.json
 *
 * @property string $id
 * @property string $body
 */
final class Ad extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'body' => ['string']];
    protected static $nullables = ['id' => false, 'body' => false];
}
