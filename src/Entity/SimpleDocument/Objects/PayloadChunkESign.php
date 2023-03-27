<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: simple-document/objects/payload-chunk-e-sign.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о ЭЦП из титула отправителя
 * source: simple-document/objects/payload-chunk-e-sign.json
 *
 * @property string $fio
 * @property string $certificateId
 * @property string $certificateDate
 * @property string $validFrom
 * @property string $validTo
 * @property string $signDate
 * @property int $serialId
 * @property int $uuid
 */
final class PayloadChunkESign extends AbstractEntity
{
    protected static $types = [
        'fio' => ['string'],
        'certificateId' => ['string'],
        'certificateDate' => ['string'],
        'validFrom' => ['string'],
        'validTo' => ['string'],
        'signDate' => ['string'],
        'serialId' => ['int'],
        'uuid' => ['int'],
    ];

    protected static $nullables = [
        'fio' => false,
        'certificateId' => false,
        'certificateDate' => false,
        'validFrom' => false,
        'validTo' => false,
        'signDate' => false,
        'serialId' => false,
        'uuid' => false,
    ];
}
