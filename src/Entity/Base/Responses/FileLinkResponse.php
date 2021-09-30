<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ссылка для скачивания файла
 * source: base/responses/file-link-response.json
 *
 * @property MessageV2[] $message
 * @property FileLinkResponseData $data
 */
final class FileLinkResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Base\Responses\FileLinkResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
