<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/message-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос, в котором есть сообщение от пользователя
 * source: order/requests/message-request.json
 *
 * @property string $message
 */
final class MessageRequest extends AbstractEntity
{
    protected static $types = ['message' => ['string']];
    protected static $nullables = ['message' => false];
}
