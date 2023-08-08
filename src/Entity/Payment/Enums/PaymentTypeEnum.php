<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Payment\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Тип платежа, от кого - кому.
 *
 * - consignor-expeditor - заказчик отправляет оплату экспедитору,
 *
 * - gp-carrier - генеральный партнер отправляет оплату перевозчику,
 *
 * - expeditor-carrier - экспедитор отправляет оплату перевозчику.
 * source: payment/enums/payment-type-enum.json
 */
final class PaymentTypeEnum extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
