<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные договора
 * source: expeditor/Common/objects/expeditor-contract.json
 *
 * @property string $id
 * @property string $date
 * @property string $number
 * @property string $title
 * @property string $endBlockingDate
 * @property string $clientComment
 */
final class ExpeditorContract extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'date' => ['string'],
        'number' => ['string'],
        'title' => ['string'],
        'endBlockingDate' => ['string'],
        'clientComment' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'date' => false,
        'number' => false,
        'title' => false,
        'endBlockingDate' => false,
        'clientComment' => false,
    ];
}
