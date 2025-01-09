<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument;

/**
 * Объект претензии о простое по заявке
 * source: order/OrderDowntimeClaim/objects/OrderDowntimeClaim.json
 *
 * @property \stdClass $id
 * @property string $number
 * @property string $type
 * @property string $date
 * @property Downtime $downtime
 * @property string $status
 * @property OrderDowntimeClaimPoint[] $points
 * @property OrderDowntimeClaimProof $proof
 * @property SignedDocument[] $signedDocuments
 * @property \stdClass $rejectReason
 * @property OrderDowntimeClaimAccess $access
 */
final class OrderDowntimeClaim extends AbstractEntity
{
    protected static $types = [
        'id' => ['\stdClass'],
        'number' => ['string'],
        'type' => ['string'],
        'date' => ['string'],
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
        'status' => ['string'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint'],
        'proof' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimProof'],
        'signedDocuments' => ['array', 'Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument'],
        'rejectReason' => ['\stdClass'],
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimAccess'],
    ];

    protected static $nullables = [
        'id' => true,
        'number' => false,
        'type' => false,
        'date' => false,
        'downtime' => false,
        'status' => false,
        'points' => false,
        'proof' => false,
        'signedDocuments' => false,
        'rejectReason' => true,
        'access' => false,
    ];
}
