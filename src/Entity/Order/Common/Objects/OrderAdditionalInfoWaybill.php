<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект добавочных данных для модального окна
 * source: order/Common/objects/order-additional-info-waybill.json
 *
 * @property string $shippingDocumentsTitle
 */
final class OrderAdditionalInfoWaybill extends AbstractEntity
{
    protected static $types = ['shippingDocumentsTitle' => ['string']];
    protected static $nullables = ['shippingDocumentsTitle' => false];
}
