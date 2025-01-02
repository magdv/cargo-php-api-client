<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Claim\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Ответ с созданной претензией о простое по заявке
 * source: claim/responses/DowntimeClaimResponse.json
 *
 * @property DowntimeClaimResponseData $data
 */
final class DowntimeClaimResponse extends AbstractEntity
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Claim\Responses\DowntimeClaimResponseData']];
    protected static $nullables = ['data' => false];
}
