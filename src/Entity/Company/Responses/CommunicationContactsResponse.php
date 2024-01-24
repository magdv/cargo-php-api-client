<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Контакты для связи
 * source: company/responses/communication-contacts-response.json
 *
 * @property CommunicationContactsResponseData $data
 */
final class CommunicationContactsResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CommunicationContactsResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
