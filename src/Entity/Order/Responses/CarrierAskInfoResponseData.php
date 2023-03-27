<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/carrier-ask-info-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Order\Objects\CarrierAskCurrent;
use Cargomart\ApiClient\Entity\Order\Objects\CarrierAskStat;

/**
 * source: order/responses/carrier-ask-info-response.json#/properties/data
 *
 * @property CarrierAskCurrent $winningCarrierAsk
 * @property CarrierAskStat $stat
 * @property CompanyShort[] $company
 */
final class CarrierAskInfoResponseData extends AbstractEntity
{
    protected static $types = [
        'winningCarrierAsk' => ['Cargomart\ApiClient\Entity\Order\Objects\CarrierAskCurrent'],
        'stat' => ['Cargomart\ApiClient\Entity\Order\Objects\CarrierAskStat'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
    ];

    protected static $nullables = ['winningCarrierAsk' => false, 'stat' => false, 'company' => false];
}
