<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список документов заявки каждый со своим списком титулов
 * source: expeditor/responses/proposal-simple-documents-response.json
 *
 * @property MessageV2[] $message
 * @property ProposalSimpleDocumentsResponseData $data
 */
final class ProposalSimpleDocumentsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalSimpleDocumentsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
