<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\Payload\ExpeditorAssignmentPayload;

/**
 * Детальная информация содержимого по просматриваемому документу в переиспользованном заказе
 * source: simple-document/objects/simple-document.json
 *
 * @property string $id
 * @property bool $isReusedOrder
 * @property bool $isCanceledOrder
 * @property ExpeditorAssignmentPayload $expeditorAssignmentPayload
 */
final class SimpleDocument extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'isReusedOrder' => ['bool'],
        'isCanceledOrder' => ['bool'],
        'expeditorAssignmentPayload' => [
            'Cargomart\ApiClient\Entity\SimpleDocument\Objects\Payload\ExpeditorAssignmentPayload',
        ],
    ];

    protected static $nullables = [
        'id' => false,
        'isReusedOrder' => false,
        'isCanceledOrder' => false,
        'expeditorAssignmentPayload' => false,
    ];
}
