<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с банковскими реквизитами и частью данных компании
 * source: expeditor-annex-to-contract/responses/banking-details-response.json
 *
 * @property BankingDetailsResponseData $data
 * @property MessageV2[] $message
 */
final class BankingDetailsResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Responses\BankingDetailsResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
