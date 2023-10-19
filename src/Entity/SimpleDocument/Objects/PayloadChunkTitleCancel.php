<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация об отказе из титула отказа/отмены
 * source: simple-document/objects/payload-chunk-title-cancel.json
 *
 * @property PayloadChunkESign $expeditorSign
 * @property PayloadChunkESign $clientSign
 * @property string $reason
 */
final class PayloadChunkTitleCancel extends AbstractEntity
{
    protected static $types = [
        'expeditorSign' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkESign'],
        'clientSign' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkESign'],
        'reason' => ['string'],
    ];

    protected static $nullables = ['expeditorSign' => false, 'clientSign' => false, 'reason' => false];
}
