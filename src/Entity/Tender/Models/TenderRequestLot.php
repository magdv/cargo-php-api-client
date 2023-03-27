<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/models/tender-request-lot.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderLotCargo;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderLotCarriage;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderLotPayment;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderLotPoint;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestLotAccess;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestLotStats;

/**
 * Лот тендера в статусе 'Сбор предложений'
 * source: tender/models/tender-request-lot.json
 *
 * @property string $id
 * @property string $tenderId
 * @property TenderLotPoint[] $route
 * @property TenderRequestLotOffer $lotOffer
 * @property TenderLotCargo $cargo
 * @property TenderLotCarriage $carriage
 * @property TenderLotPayment $payment
 * @property string $comment
 * @property TenderRequestLotStats $stats
 * @property string[] $offerRestrictions
 * @property TenderRequestLotAccess $access
 */
final class TenderRequestLot extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'tenderId' => ['string'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Tender\Objects\TenderLotPoint'],
        'lotOffer' => ['Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLotOffer'],
        'cargo' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderLotCargo'],
        'carriage' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderLotCarriage'],
        'payment' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderLotPayment'],
        'comment' => ['string'],
        'stats' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestLotStats'],
        'offerRestrictions' => ['array', 'string'],
        'access' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestLotAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'tenderId' => false,
        'route' => false,
        'lotOffer' => false,
        'cargo' => false,
        'carriage' => false,
        'payment' => false,
        'comment' => false,
        'stats' => false,
        'offerRestrictions' => false,
        'access' => false,
    ];
}
