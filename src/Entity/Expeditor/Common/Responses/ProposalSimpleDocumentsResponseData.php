<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderSimpleDocument;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment;

/**
 * source: expeditor/Common/responses/proposal-simple-documents-response.json#/properties/data
 *
 * @property OrderSimpleDocument $order
 * @property SimpleDocumentAssignment[] $oldExpeditorAssignment
 * @property SimpleDocumentAssignment[] $oldCarrierAssignment
 */
final class ProposalSimpleDocumentsResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderSimpleDocument'],
        'oldExpeditorAssignment' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment'],
        'oldCarrierAssignment' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentAssignment'],
    ];

    protected static $nullables = ['order' => false, 'oldExpeditorAssignment' => false, 'oldCarrierAssignment' => false];
}
