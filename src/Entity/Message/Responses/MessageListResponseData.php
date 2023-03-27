<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: message/responses/message-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Message\Objects\Message;

/**
 * source: message/responses/message-list-response.json#/properties/data
 *
 * @property Message[] $message
 * @property Pagination $pagination
 */
final class MessageListResponseData extends AbstractEntity
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Message\Objects\Message'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['message' => false, 'pagination' => false];
}
