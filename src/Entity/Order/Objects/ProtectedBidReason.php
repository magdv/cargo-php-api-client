<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Массив причин, по которым нельзя поставить ставку. (1- аноним, 2- не валидированный, 3- не партнер, 4- в черном списке (либо доступно только белому списку), 5- Не является партнером ГП, 6- у партнера не заключен контракт, 7- В черном списке компании, 8 - нет партнера и нет контракта, 9 - не одобрен запрос доступа в компанию)
 * source: order/objects/protected-bid-reason.json
 */
final class ProtectedBidReason extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
