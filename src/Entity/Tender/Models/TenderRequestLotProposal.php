<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/models/tender-request-lot-proposal.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Models;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Предложения лота
 * source: tender/models/tender-request-lot-proposal.json
 *
 * @property string $id
 * @property string $lotId
 * @property \stdClass $vatRate
 * @property string $price
 * @property float $volume
 * @property string $unit
 * @property string $createDate
 * @property string $carrierId
 * @property int $creatorId
 * @property string $currencyCode
 * @property string $comment
 */
final class TenderRequestLotProposal extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'lotId' => ['string'],
        'vatRate' => ['\stdClass'],
        'price' => ['string'],
        'volume' => ['float'],
        'unit' => ['string'],
        'createDate' => ['string'],
        'carrierId' => ['string'],
        'creatorId' => ['int'],
        'currencyCode' => ['string'],
        'comment' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'lotId' => false,
        'vatRate' => true,
        'price' => false,
        'volume' => false,
        'unit' => false,
        'createDate' => false,
        'carrierId' => false,
        'creatorId' => false,
        'currencyCode' => false,
        'comment' => false,
    ];
}
