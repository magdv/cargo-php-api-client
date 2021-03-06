<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Требования отправителя к перевозкам
 * source: company/responses/requirement.json
 *
 * @property MessageV2[] $message
 * @property RequirementData $data
 */
final class Requirement extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\RequirementData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
