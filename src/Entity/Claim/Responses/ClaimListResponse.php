<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Claim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список требований на оплату
 * source: claim/responses/ClaimListResponse.json
 *
 * @property ClaimListResponseData $data
 * @property MessageV2[] $message
 */
final class ClaimListResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Claim\Responses\ClaimListResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
