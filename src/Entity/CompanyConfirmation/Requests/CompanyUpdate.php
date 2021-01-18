<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос установки данных компании
 * source: company-confirmation/requests/company-update.json
 *
 * @property string $taxSystem
 * @property bool $isNotTaxReturnDate
 */
final class CompanyUpdate extends AbstractEntity
{
    protected static $types = ['taxSystem' => ['string'], 'isNotTaxReturnDate' => ['bool']];
    protected static $nullables = ['taxSystem' => false, 'isNotTaxReturnDate' => false];
}
