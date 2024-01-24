<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список документов заявки каждый со своим списком титулов
 * source: expeditor/responses/proposal-simple-documents-response.json
 *
 * @property ProposalSimpleDocumentsResponseData $data
 */
final class ProposalSimpleDocumentsResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalSimpleDocumentsResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
