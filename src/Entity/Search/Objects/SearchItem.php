<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: search/objects/search-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Search\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект ответа глобального поиска
 * source: search/objects/search-item.json
 *
 * @property string $id
 * @property string $type
 * @property \stdClass $payload
 */
final class SearchItem extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'type' => ['string'], 'payload' => ['\stdClass']];
    protected static $nullables = ['id' => false, 'type' => false, 'payload' => true];
}
