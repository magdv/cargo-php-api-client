<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/models/tender-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderPermission;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestAccess;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestInfo;
use Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestStats;

/**
 * Тендер в статусе 'Сбор предложений'
 * source: tender/models/tender-request.json
 *
 * @property string $id
 * @property int $serialId
 * @property string $consignorId
 * @property DateTimeRange $tradeDateRange
 * @property TenderPermission $permission
 * @property TenderRequestInfo $info
 * @property TenderRequestStats $stats
 * @property TenderRequestAccess $access
 */
final class TenderRequest extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'consignorId' => ['string'],
        'tradeDateRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'permission' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderPermission'],
        'info' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestInfo'],
        'stats' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestStats'],
        'access' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderRequestAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'consignorId' => false,
        'tradeDateRange' => false,
        'permission' => false,
        'info' => false,
        'stats' => false,
        'access' => false,
    ];
}
