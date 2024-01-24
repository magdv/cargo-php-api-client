<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список пользователей и компаний для ответа
 * source: expeditor/responses/proposal-users-list-response.json
 *
 * @property ProposalUsersListResponseData $data
 */
final class ProposalUsersListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalUsersListResponseData']];
    protected static $nullables = ['data' => false];
}
