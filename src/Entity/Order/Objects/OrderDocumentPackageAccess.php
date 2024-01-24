<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к пакету документов заказа
 * source: order/objects/order-document-package-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $createDocument
 * @property bool $createModeration
 * @property bool $createAccept
 * @property bool $createReject
 */
final class OrderDocumentPackageAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'createDocument' => ['bool'],
        'createModeration' => ['bool'],
        'createAccept' => ['bool'],
        'createReject' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'update' => false,
        'createDocument' => false,
        'createModeration' => false,
        'createAccept' => false,
        'createReject' => false,
    ];
}
