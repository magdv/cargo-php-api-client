<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: advert/responses/ad-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Advert\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с рекламным объявлением
 * source: advert/responses/ad-item.json
 *
 * @property MessageV2[] $message
 * @property AdItemData $data
 */
final class AdItem extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Advert\Responses\AdItemData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
