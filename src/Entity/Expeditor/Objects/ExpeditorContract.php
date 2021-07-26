<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные договора
 * source: expeditor/objects/expeditor-contract.json
 *
 * @property string $id
 * @property string $date
 * @property string $number
 * @property string $title
 */
final class ExpeditorContract extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'date' => ['string'], 'number' => ['string'], 'title' => ['string']];
    protected static $nullables = ['id' => false, 'date' => false, 'number' => false, 'title' => false];
}
