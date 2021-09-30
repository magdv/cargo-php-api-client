<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Области перевозок
 * source: company/responses/company-carriage-region-response.json
 *
 * @property MessageV2[] $message
 * @property CarriageRegionData $data
 */
final class CarriageRegion extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CarriageRegionData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
