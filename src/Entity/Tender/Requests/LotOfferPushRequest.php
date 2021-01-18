<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Разместить отклик на лот
 * source: tender/requests/lot-offer-push-request.json
 *
 * @property string $price
 * @property int $volume
 * @property string $comment
 */
final class LotOfferPushRequest extends AbstractEntity
{
    protected static $types = ['price' => ['string'], 'volume' => ['int'], 'comment' => ['string']];
    protected static $nullables = ['price' => false, 'volume' => false, 'comment' => false];
}
