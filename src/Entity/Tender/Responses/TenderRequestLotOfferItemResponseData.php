<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLotOffer;

/**
 * source: tender/responses/tender-request-lot-offer-item-response.json#/properties/data
 *
 * @property TenderRequestLotOffer $lotOffer
 */
final class TenderRequestLotOfferItemResponseData extends AbstractEntity
{
    protected static $types = ['lotOffer' => ['Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLotOffer']];
    protected static $nullables = ['lotOffer' => false];
}
