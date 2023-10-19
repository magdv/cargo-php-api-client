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
 * @property MessageV2[] $message
 * @property ExpeditorCarrierContractListData $data
 */
final class ExpeditorCarrierContractList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Responses\ExpeditorCarrierContractListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
