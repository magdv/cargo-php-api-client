<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/objects/currency.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание объекта валюты
 * source: dictionary/objects/currency.json
 *
 * @property string $code
 * @property string $sign
 * @property string $name
 * @property float $conversion
 */
final class Currency extends AbstractEntity
{
    protected static $types = ['code' => ['string'], 'sign' => ['string'], 'name' => ['string'], 'conversion' => ['float']];
    protected static $nullables = ['code' => false, 'sign' => false, 'name' => false, 'conversion' => false];
}
