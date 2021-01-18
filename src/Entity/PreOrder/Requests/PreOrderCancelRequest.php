<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отмена предзаказа
 * source: pre-order/requests/pre-order-cancel-request.json
 *
 * @property string $message
 */
final class PreOrderCancelRequest extends AbstractEntity
{
    protected static $types = ['message' => ['string']];
    protected static $nullables = ['message' => false];
}
