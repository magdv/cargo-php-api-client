<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDocumentPackage;

/**
 * Перевозчик
 * source: expeditor/objects/proposal-carrier.json
 *
 * @property string $carrierId
 * @property int $status
 * @property int[] $curators
 * @property BankingDetails $bankingDetails
 * @property OriginalDocument $originalDocument
 * @property ProposalDriver $driver
 * @property ProposalTruck $truck
 * @property Price $price
 * @property OrderDocumentPackage $documentPackage
 * @property string $paymentType
 * @property ExpeditorContract $expeditorContract
 */
final class ProposalCarrier extends AbstractEntity
{
    protected static $types = [
        'carrierId' => ['string'],
        'status' => ['int'],
        'curators' => ['array', 'int'],
        'bankingDetails' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\BankingDetails'],
        'originalDocument' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\OriginalDocument'],
        'driver' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalDriver'],
        'truck' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalTruck'],
        'price' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'documentPackage' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDocumentPackage'],
        'paymentType' => ['string'],
        'expeditorContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
    ];

    protected static $nullables = [
        'carrierId' => false,
        'status' => false,
        'curators' => false,
        'bankingDetails' => false,
        'originalDocument' => false,
        'driver' => false,
        'truck' => false,
        'price' => false,
        'documentPackage' => false,
        'paymentType' => false,
        'expeditorContract' => false,
    ];
}
