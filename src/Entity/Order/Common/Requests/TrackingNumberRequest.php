<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/Common/requests/tracking-number-request.json
 *
 * @property string $trackingNumber
 * @property string $postServiceName
 */
final class TrackingNumberRequest extends AbstractEntity
{
    protected static $types = ['trackingNumber' => ['string'], 'postServiceName' => ['string']];
    protected static $nullables = ['trackingNumber' => false, 'postServiceName' => false];
}
