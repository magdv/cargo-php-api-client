<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос создания критерия поиска
 * source: order/Common/requests/order-search-update-criteria-request.json
 *
 * @property string $fromDate
 * @property string $departureCode
 */
final class OrderSearchUpdateCriteriaRequest extends AbstractEntity
{
    protected static $types = ['fromDate' => ['string'], 'departureCode' => ['string']];
    protected static $nullables = ['fromDate' => false, 'departureCode' => false];
}
