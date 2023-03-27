<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/comment-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к ответам на комментарии
 * source: order/objects/comment-access.json
 *
 * @property bool $createCommentReply
 */
final class CommentAccess extends AbstractEntity
{
    protected static $types = ['createCommentReply' => ['bool']];
    protected static $nullables = ['createCommentReply' => false];
}
