<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ на отклик
 * source: tender/responses/tender-request-lot-offer-item-response.json
 *
 * @property TenderRequestLotOfferItemResponseData $data
 */
final class TenderRequestLotOfferItemResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotOfferItemResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
