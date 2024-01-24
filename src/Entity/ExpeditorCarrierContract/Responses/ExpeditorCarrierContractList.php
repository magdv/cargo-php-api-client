<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список договоров Перевозчика с Экспедитором
 * source: expeditor-carrier-contract/responses/expeditor-carrier-contract-list.json
 *
 * @property ExpeditorCarrierContractListData $data
 * @property MessageV2[] $message
 */
final class ExpeditorCarrierContractList extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Responses\ExpeditorCarrierContractListData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
