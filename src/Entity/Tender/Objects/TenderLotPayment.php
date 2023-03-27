<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-lot-payment.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о цене
 * source: tender/objects/tender-lot-payment.json
 *
 * @property string $currencyCode
 * @property int $vatRate
 */
final class TenderLotPayment extends AbstractEntity
{
    protected static $types = ['currencyCode' => ['string'], 'vatRate' => ['int']];
    protected static $nullables = ['currencyCode' => false, 'vatRate' => false];
}
