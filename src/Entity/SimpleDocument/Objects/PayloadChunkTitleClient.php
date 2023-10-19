<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о заказчике, грузоотправителе и грузополучателе из титула отправителя
 * source: simple-document/objects/payload-chunk-title-client.json
 *
 * @property PayloadChunkClient $client
 * @property PayloadChunkConsignorOrConsignee[] $consignor
 * @property PayloadChunkConsignorOrConsignee[] $consignee
 * @property PayloadChunkPoints[] $points
 * @property PayloadChunkCargo $cargo
 * @property string $maxPrice
 * @property PayloadChunkESign $sign
 */
final class PayloadChunkTitleClient extends AbstractEntity
{
    protected static $types = [
        'client' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkClient'],
        'consignor' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkConsignorOrConsignee'],
        'consignee' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkConsignorOrConsignee'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkPoints'],
        'cargo' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkCargo'],
        'maxPrice' => ['string'],
        'sign' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkESign'],
    ];

    protected static $nullables = [
        'client' => false,
        'consignor' => false,
        'consignee' => false,
        'points' => false,
        'cargo' => false,
        'maxPrice' => false,
        'sign' => false,
    ];
}
