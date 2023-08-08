<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Фильтр для поиска сообщений
 * source: message/requests/list-filter-request.json
 *
 * @property string $search
 * @property bool $isRead
 */
final class ListFilterRequest extends AbstractEntity
{
    protected static $types = ['search' => ['string'], 'isRead' => ['bool']];
    protected static $nullables = ['search' => false, 'isRead' => false];
}
