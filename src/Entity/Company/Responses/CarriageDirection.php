<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Направления перевозок отправителя
 * source: company/responses/company-carriage-direction-response.json
 *
 * @property MessageV2[] $message
 * @property CarriageDirectionData $data
 */
final class CarriageDirection extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CarriageDirectionData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
