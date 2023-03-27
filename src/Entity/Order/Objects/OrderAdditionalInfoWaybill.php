<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-additional-info-waybill.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект добавочных данных для модального окна
 * source: order/objects/order-additional-info-waybill.json
 *
 * @property string $shippingDocumentsTitle
 */
final class OrderAdditionalInfoWaybill extends AbstractEntity
{
    protected static $types = ['shippingDocumentsTitle' => ['string']];
    protected static $nullables = ['shippingDocumentsTitle' => false];
}
