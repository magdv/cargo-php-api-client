<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для редактирования тэгов заказа
 * source: order/requests/order-edit-tag-request.json
 *
 * @property string[] $tag
 */
final class OrderEditTagRequest extends AbstractEntity
{
    protected static $types = ['tag' => ['array', 'string']];
    protected static $nullables = ['tag' => false];
}
