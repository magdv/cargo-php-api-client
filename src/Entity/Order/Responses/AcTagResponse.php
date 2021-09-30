<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ данных для поиска по справочнику автокомплита
 * source: order/responses/ac-tag-response.json
 *
 * @property MessageV2[] $message
 * @property AcTagResponseData $data
 */
final class AcTagResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcTagResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
