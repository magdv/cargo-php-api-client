<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/expeditor-offer-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeSeparate;

/**
 * Запрос создания или замены предложения цены по заказу перевозчиком
 * source: order/requests/expeditor-offer-request.json
 *
 * @property string $price
 * @property DateTimeSeparate $loadDateTime
 */
final class ExpeditorOfferRequest extends AbstractEntity
{
    protected static $types = [
        'price' => ['string'],
        'loadDateTime' => ['Cargomart\ApiClient\Entity\Base\DateTimeSeparate'],
    ];

    protected static $nullables = ['price' => false, 'loadDateTime' => false];
}
