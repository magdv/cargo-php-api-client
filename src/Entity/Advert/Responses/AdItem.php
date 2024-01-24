<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Advert\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с рекламным объявлением
 * source: advert/responses/ad-item.json
 *
 * @property AdItemData $data
 */
final class AdItem extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Advert\Responses\AdItemData']];
    protected static $nullables = ['data' => false];
}
