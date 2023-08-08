<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileShort;

/**
 * Запрос на редактирование/создание документа заказа
 * source: order/requests/order-document-update-request.json
 *
 * @property string $id
 * @property string $name
 * @property string $number
 * @property string $date
 * @property string $type
 * @property FileShort[] $files
 */
final class OrderDocumentUpdateRequest extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'name' => ['string'],
        'number' => ['string'],
        'date' => ['string'],
        'type' => ['string'],
        'files' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileShort'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'number' => false,
        'date' => false,
        'type' => false,
        'files' => false,
    ];
}
