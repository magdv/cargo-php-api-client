<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderComment\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект комментария
 * source: order/OrderComment/objects/comment.json
 *
 * @property int $id
 * @property int $userId
 * @property string $orderId
 * @property string $companyId
 * @property string $createDate
 * @property string $text
 * @property int $replyUserId
 * @property string $replyDate
 * @property string $replyText
 * @property CommentAccess $access
 */
final class Comment extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'userId' => ['int'],
        'orderId' => ['string'],
        'companyId' => ['string'],
        'createDate' => ['string'],
        'text' => ['string'],
        'replyUserId' => ['int'],
        'replyDate' => ['string'],
        'replyText' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderComment\Objects\CommentAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'userId' => false,
        'orderId' => false,
        'companyId' => false,
        'createDate' => false,
        'text' => false,
        'replyUserId' => false,
        'replyDate' => false,
        'replyText' => false,
        'access' => false,
    ];
}
