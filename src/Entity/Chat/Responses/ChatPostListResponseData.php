<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Chat\Models\ChatPost;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: chat/responses/chat-post-list-response.json#/properties/data
 *
 * @property ChatPost[] $chatPost
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class ChatPostListResponseData extends AbstractEntity
{
    protected static $types = [
        'chatPost' => ['array', 'Cargomart\ApiClient\Entity\Chat\Models\ChatPost'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['chatPost' => false, 'company' => false, 'contact' => false];
}
