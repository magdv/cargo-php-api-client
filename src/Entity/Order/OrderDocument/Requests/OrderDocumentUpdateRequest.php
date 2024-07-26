<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileShort;

/**
 * Запрос на редактирование/создание документа заказа
 * source: order/OrderDocument/requests/order-document-update-request.json
 *
 * @property string $type
 * @property string $id
 * @property string $name
 * @property string $number
 * @property string $date
 * @property FileShort[] $files
 */
final class OrderDocumentUpdateRequest extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'id' => ['string'],
        'name' => ['string'],
        'number' => ['string'],
        'date' => ['string'],
        'files' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileShort'],
    ];

    protected static $nullables = [
        'type' => false,
        'id' => false,
        'name' => false,
        'number' => false,
        'date' => false,
        'files' => false,
    ];
}
