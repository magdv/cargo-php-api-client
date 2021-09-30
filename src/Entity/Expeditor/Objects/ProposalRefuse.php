<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отказ от заказа Экспедитора
 * source: expeditor/objects/proposal-refuse.json
 *
 * @property string $title
 * @property string $reason
 * @property bool $isActual
 * @property string $expeditorNote
 * @property int $clientId
 * @property int $creatorId
 * @property string $createDate
 */
final class ProposalRefuse extends AbstractEntity
{
    protected static $types = [
        'title' => ['string'],
        'reason' => ['string'],
        'isActual' => ['bool'],
        'expeditorNote' => ['string'],
        'clientId' => ['int'],
        'creatorId' => ['int'],
        'createDate' => ['string'],
    ];

    protected static $nullables = [
        'title' => false,
        'reason' => false,
        'isActual' => false,
        'expeditorNote' => false,
        'clientId' => false,
        'creatorId' => false,
        'createDate' => false,
    ];
}
