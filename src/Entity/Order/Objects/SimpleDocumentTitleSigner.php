<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подписант титула
 * source: order/objects/simple-document-title-signer.json
 *
 * @property int $id
 * @property string $name
 * @property string $signDate
 * @property string $companyId
 * @property string $companyName
 * @property int $certificateNumber
 */
final class SimpleDocumentTitleSigner extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'name' => ['string'],
        'signDate' => ['string'],
        'companyId' => ['string'],
        'companyName' => ['string'],
        'certificateNumber' => ['int'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'signDate' => false,
        'companyId' => false,
        'companyName' => false,
        'certificateNumber' => false,
    ];
}
