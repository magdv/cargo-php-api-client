<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/comment-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Order\Objects\Comment;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Комментарий
 * source: order/responses/comment-response.json#/properties/data
 *
 * @property Comment $comment
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class CommentResponseData extends AbstractEntity
{
    protected static $types = [
        'comment' => ['Cargomart\ApiClient\Entity\Order\Objects\Comment'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['comment' => false, 'company' => false, 'contact' => false];
}
