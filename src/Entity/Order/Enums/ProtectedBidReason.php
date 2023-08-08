<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Массив причин, по которым нельзя поставить ставку. (1- аноним, 2- не валидированный, 3- не партнер, 4- в черном списке (либо доступно только белому списку), 5- Не является партнером ГП, 6- у партнера не заключен контракт, 7- В черном списке компании, 8 - нет партнера и нет контракта, 9 - не одобрен запрос доступа в компанию, 10 - не заданы банк. реквизиты для перевозчика в эксп. заказе, 11 - не активные или не аткуальные банк. ревизиты для перевозчика в эксп. заказе), 12 - нет договора с экспедитором(но можно его заключить), 13 - нет действующей ПЭП, 14 - текущий договор с экспедитором заблокирован, 15 - нет договора с экспедитором и его заключить нельзя
 * source: order/enums/protected-bid-reason.json
 */
final class ProtectedBidReason extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
