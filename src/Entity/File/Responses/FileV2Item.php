<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Структура ответа при запросе файла
 * source: file/responses/file-v2-item.json
 *
 * @property FileV2ItemData $data
 * @property MessageV2[] $message
 */
final class FileV2Item extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\File\Responses\FileV2ItemData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
