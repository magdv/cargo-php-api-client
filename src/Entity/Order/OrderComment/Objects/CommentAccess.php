<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderComment\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к ответам на комментарии
 * source: order/OrderComment/objects/comment-access.json
 *
 * @property bool $createCommentReply
 */
final class CommentAccess extends AbstractEntity
{
    protected static $types = ['createCommentReply' => ['bool']];
    protected static $nullables = ['createCommentReply' => false];
}
