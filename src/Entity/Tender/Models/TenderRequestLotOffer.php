<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Models;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отклик на Лот
 * source: tender/models/tender-request-lot-offer.json
 *
 * @property float $vatRate
 * @property string $price
 * @property float $volume
 * @property string $unit
 * @property string $currencyCode
 * @property string $comment
 */
final class TenderRequestLotOffer extends AbstractEntity
{
    protected static $types = [
        'vatRate' => ['float'],
        'price' => ['string'],
        'volume' => ['float'],
        'unit' => ['string'],
        'currencyCode' => ['string'],
        'comment' => ['string'],
    ];

    protected static $nullables = [
        'vatRate' => true,
        'price' => false,
        'volume' => false,
        'unit' => false,
        'currencyCode' => false,
        'comment' => false,
    ];
}
