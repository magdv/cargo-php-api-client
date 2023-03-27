<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/requests/tender-draft-update-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateRange;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderDraftLot;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderInfo;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderPermission;

/**
 * Запрос на редактирование тендера
 * source: tender/requests/tender-draft-update-request.json
 *
 * @property int $version
 * @property TenderInfo $info
 * @property TenderPermission $permission
 * @property DateRange $tradeDateRange
 * @property TenderDraftLot[] $lot
 */
final class TenderDraftUpdateRequest extends AbstractEntity
{
    protected static $types = [
        'version' => ['int'],
        'info' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderInfo'],
        'permission' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderPermission'],
        'tradeDateRange' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'lot' => ['array', 'Cargomart\ApiClient\Entity\Tender\Objects\TenderDraftLot'],
    ];

    protected static $nullables = [
        'version' => false,
        'info' => false,
        'permission' => false,
        'tradeDateRange' => false,
        'lot' => false,
    ];
}
