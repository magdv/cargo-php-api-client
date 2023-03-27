<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-request-lot-offer-item-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ на отклик
 * source: tender/responses/tender-request-lot-offer-item-response.json
 *
 * @property MessageV2[] $message
 * @property TenderRequestLotOfferItemResponseData $data
 */
final class TenderRequestLotOfferItemResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotOfferItemResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
