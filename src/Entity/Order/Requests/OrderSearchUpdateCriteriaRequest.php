<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-search-update-criteria-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос создания критерия поиска
 * source: order/requests/order-search-update-criteria-request.json
 *
 * @property string $fromDate
 * @property string $departureCode
 */
final class OrderSearchUpdateCriteriaRequest extends AbstractEntity
{
    protected static $types = ['fromDate' => ['string'], 'departureCode' => ['string']];
    protected static $nullables = ['fromDate' => false, 'departureCode' => false];
}
