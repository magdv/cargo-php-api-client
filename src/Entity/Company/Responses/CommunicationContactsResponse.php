<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/communication-contacts-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Контакты для связи
 * source: company/responses/communication-contacts-response.json
 *
 * @property MessageV2[] $message
 * @property CommunicationContactsResponseData $data
 */
final class CommunicationContactsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CommunicationContactsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
