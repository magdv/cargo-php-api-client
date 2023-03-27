<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/protected-bid-reason-comment.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пункт маршрута
 * source: order/objects/protected-bid-reason-comment.json
 *
 * @property int $type
 * @property string $comment
 */
final class ProtectedBidReasonComment extends AbstractEntity
{
    protected static $types = ['type' => ['int'], 'comment' => ['string']];
    protected static $nullables = ['type' => false, 'comment' => false];
}
