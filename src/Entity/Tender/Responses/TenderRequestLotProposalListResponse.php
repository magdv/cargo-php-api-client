<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-request-lot-proposal-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список откликов на лот
 * source: tender/responses/tender-request-lot-proposal-list-response.json
 *
 * @property MessageV2[] $message
 * @property TenderRequestLotProposalListResponseData $data
 */
final class TenderRequestLotProposalListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotProposalListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
