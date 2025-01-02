<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список подписанных документов по заказу
 * source: expeditor/Common/responses/ExpeditorProposalSignedDocumentListResponse.json
 *
 * @property ExpeditorProposalSignedDocumentListResponseData $data
 * @property MessageV2[] $message
 */
final class ExpeditorProposalSignedDocumentListResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Responses\ExpeditorProposalSignedDocumentListResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
