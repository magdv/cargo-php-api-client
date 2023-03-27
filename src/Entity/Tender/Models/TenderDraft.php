<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/models/tender-draft.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateRange;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderDraftAccess;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderDraftLot;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderInfo;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderPermission;

/**
 * Черновик тендера
 * source: tender/models/tender-draft.json
 *
 * @property string $id
 * @property int $version
 * @property int $statusId
 * @property DateRange $tradeDateRange
 * @property TenderPermission $permission
 * @property TenderInfo $info
 * @property TenderDraftLot[] $lot
 * @property string $createDate
 * @property TenderDraftAccess $access
 */
final class TenderDraft extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'version' => ['int'],
        'statusId' => ['int'],
        'tradeDateRange' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'permission' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderPermission'],
        'info' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderInfo'],
        'lot' => ['array', 'Cargomart\ApiClient\Entity\Tender\Objects\TenderDraftLot'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderDraftAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'version' => false,
        'statusId' => false,
        'tradeDateRange' => false,
        'permission' => false,
        'info' => false,
        'lot' => false,
        'createDate' => false,
        'access' => false,
    ];
}
