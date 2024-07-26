<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderComment\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Order\OrderComment\Objects\Comment;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/OrderComment/responses/comment-list-response.json#/properties/data
 *
 * @property Comment[] $comment
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 * @property Pagination $pagination
 */
final class CommentListResponseData extends AbstractEntity
{
    protected static $types = [
        'comment' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderComment\Objects\Comment'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['comment' => false, 'company' => false, 'contact' => false, 'pagination' => false];
}
