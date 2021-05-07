<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Order\Objects\OrderOffer;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/responses/order-offer-list-response.json#/properties/data
 *
 * @property OrderOffer[] $offer
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class OrderOfferListResponseData extends AbstractEntity
{
    protected static $types = [
        'offer' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderOffer'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['offer' => false, 'company' => false, 'contact' => false];
}
