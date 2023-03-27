<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-carrier-contract/objects/contract-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект списка договоров
 * source: expeditor-carrier-contract/objects/contract-item.json
 *
 * @property string $id
 * @property string $number
 * @property string $date
 * @property string $certificateUrl
 * @property string $certificateFileId
 * @property string $contractFileId
 * @property string $contractPdfUrl
 * @property string $status
 * @property string $endBlockingDate
 * @property string $clientComment
 */
final class ContractItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'number' => ['string'],
        'date' => ['string'],
        'certificateUrl' => ['string'],
        'certificateFileId' => ['string'],
        'contractFileId' => ['string'],
        'contractPdfUrl' => ['string'],
        'status' => ['string'],
        'endBlockingDate' => ['string'],
        'clientComment' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'number' => false,
        'date' => false,
        'certificateUrl' => false,
        'certificateFileId' => false,
        'contractFileId' => false,
        'contractPdfUrl' => false,
        'status' => false,
        'endBlockingDate' => false,
        'clientComment' => false,
    ];
}
