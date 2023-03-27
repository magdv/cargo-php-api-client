<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/responses/chat-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Chat\Models\Chat;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;

/**
 * source: chat/responses/chat-response.json#/properties/data
 *
 * @property Chat $chat
 * @property CompanyShort[] $company
 */
final class ChatResponseData extends AbstractEntity
{
    protected static $types = [
        'chat' => ['Cargomart\ApiClient\Entity\Chat\Models\Chat'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
    ];

    protected static $nullables = ['chat' => false, 'company' => false];
}
