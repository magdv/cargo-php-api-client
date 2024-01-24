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
 * @property ProposalSimpleDocumentsResponseData $data
 * @property MessageV2[] $message
 */
final class ProposalSimpleDocumentsResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalSimpleDocumentsResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
