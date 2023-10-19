<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Payment\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статусы счёта на оплату.
 *
 * - new-invoice-prepared - получатель платежа сформировал счёт на оплату,
 *
 * - invoice-sent - получатель платежа отправил счёт на оплату,
 *
 * - invoice-received - отправитель платежа получил счёт на оплату,
 *
 * - invoice-partial-paid - отправитель платежа частично оплатил счёт,
 *
 * - invoice-full-paid - отправитель платежа полностью оплатил счёт
 * source: payment/enums/invoice-status-enum.json
 */
final class InvoiceStatusEnum extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
