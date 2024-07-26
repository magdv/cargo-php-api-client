<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Edm\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные ящика контрагента
 * source: edm/objects/diadoc-box-id-data.json
 *
 * @property string $id
 * @property string $title
 */
final class DiadocBoxIdData extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'title' => ['string']];
    protected static $nullables = ['id' => false, 'title' => false];
}
