<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-draft-lot.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Лот черновика тендера
 * source: tender/objects/tender-draft-lot.json
 *
 * @property TenderLotPoint[] $route
 * @property TenderLotCargo $cargo
 * @property TenderLotCarriage $carriage
 * @property string $comment
 */
final class TenderDraftLot extends AbstractEntity
{
    protected static $types = [
        'route' => ['array', 'Cargomart\ApiClient\Entity\Tender\Objects\TenderLotPoint'],
        'cargo' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderLotCargo'],
        'carriage' => ['Cargomart\ApiClient\Entity\Tender\Objects\TenderLotCarriage'],
        'comment' => ['string'],
    ];

    protected static $nullables = ['route' => false, 'cargo' => false, 'carriage' => false, 'comment' => false];
}
