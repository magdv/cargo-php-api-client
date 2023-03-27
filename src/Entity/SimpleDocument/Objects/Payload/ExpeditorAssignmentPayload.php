<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: simple-document/objects/payload/expeditor-assignment-payload.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkContract;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkDocument;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkTitleCancel;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkTitleClient;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkTitleExpeditor;

/**
 * Содержимое титулов поручения экспедитору
 * source: simple-document/objects/payload/expeditor-assignment-payload.json
 *
 * @property PayloadChunkDocument $document
 * @property PayloadChunkContract $contract
 * @property PayloadChunkDocument $previousDocument
 * @property PayloadChunkTitleClient $titleClient
 * @property PayloadChunkTitleExpeditor $titleExpeditor
 * @property PayloadChunkTitleCancel $titleCancel
 */
final class ExpeditorAssignmentPayload extends AbstractEntity
{
    protected static $types = [
        'document' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkDocument'],
        'contract' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkContract'],
        'previousDocument' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkDocument'],
        'titleClient' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkTitleClient'],
        'titleExpeditor' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkTitleExpeditor'],
        'titleCancel' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkTitleCancel'],
    ];

    protected static $nullables = [
        'document' => false,
        'contract' => false,
        'previousDocument' => false,
        'titleClient' => false,
        'titleExpeditor' => false,
        'titleCancel' => false,
    ];
}
