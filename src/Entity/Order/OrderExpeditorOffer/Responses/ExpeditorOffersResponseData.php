<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderExpeditorOffer\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderExpeditorOffer\Objects\ExpeditorOffer;

/**
 * source: order/OrderExpeditorOffer/responses/expeditor-offers-response.json#/properties/data
 *
 * @property ExpeditorOffer[] $expeditorOffers
 */
final class ExpeditorOffersResponseData extends AbstractEntity
{
    protected static $types = [
        'expeditorOffers' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderExpeditorOffer\Objects\ExpeditorOffer'],
    ];

    protected static $nullables = ['expeditorOffers' => false];
}
