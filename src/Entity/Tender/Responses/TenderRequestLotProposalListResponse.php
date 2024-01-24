<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список откликов на лот
 * source: tender/responses/tender-request-lot-proposal-list-response.json
 *
 * @property TenderRequestLotProposalListResponseData $data
 */
final class TenderRequestLotProposalListResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotProposalListResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
