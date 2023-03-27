<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/responses/empty-data-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ только с сообщениями
 * source: base/responses/empty-data-response.json
 *
 * @property MessageV2[] $message
 */
final class EmptyDataResponse extends AbstractResponse
{
    protected static $types = ['message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2']];
    protected static $nullables = ['message' => false];
}
