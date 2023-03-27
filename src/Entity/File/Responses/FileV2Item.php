<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: file/responses/file-v2-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Структура ответа при запросе файла
 * source: file/responses/file-v2-item.json
 *
 * @property MessageV2[] $message
 * @property FileV2ItemData $data
 */
final class FileV2Item extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\File\Responses\FileV2ItemData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
