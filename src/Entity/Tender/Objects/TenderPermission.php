<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-permission.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о доступе к тендеру
 * source: tender/objects/tender-permission.json
 *
 * @property string $type
 * @property int $contractId
 * @property string[] $includeClient
 * @property string[] $excludeClient
 */
final class TenderPermission extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'contractId' => ['int'],
        'includeClient' => ['array', 'string'],
        'excludeClient' => ['array', 'string'],
    ];

    protected static $nullables = [
        'type' => false,
        'contractId' => false,
        'includeClient' => false,
        'excludeClient' => false,
    ];
}
