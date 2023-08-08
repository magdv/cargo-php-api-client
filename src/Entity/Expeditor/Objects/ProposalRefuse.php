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
 * @property string $type
 * @property string $reason
 * @property bool $isActual
 * @property string $expeditorNote
 * @property int $clientId
 * @property string $companyId
 * @property int $creatorId
 * @property string $createDate
 */
final class ProposalRefuse extends AbstractEntity
{
    protected static $types = [
        'title' => ['string'],
        'type' => ['string'],
        'reason' => ['string'],
        'isActual' => ['bool'],
        'expeditorNote' => ['string'],
        'clientId' => ['int'],
        'companyId' => ['string'],
        'creatorId' => ['int'],
        'createDate' => ['string'],
    ];

    protected static $nullables = [
        'title' => false,
        'type' => false,
        'reason' => false,
        'isActual' => false,
        'expeditorNote' => false,
        'clientId' => false,
        'companyId' => false,
        'creatorId' => false,
        'createDate' => false,
    ];
}
