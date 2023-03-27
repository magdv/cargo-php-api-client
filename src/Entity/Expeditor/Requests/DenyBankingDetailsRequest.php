<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/requests/deny-banking-details-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\Objects\BankingDetailsValue;

/**
 * Данные для создания пометки об ошибочных банковских реквизитах в компании перевозчика
 * source: expeditor/requests/deny-banking-details-request.json
 *
 * @property BankingDetailsValue $operatingAccount
 * @property BankingDetailsValue $correspondingAccount
 * @property BankingDetailsValue $bic
 */
final class DenyBankingDetailsRequest extends AbstractEntity
{
    protected static $types = [
        'operatingAccount' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\BankingDetailsValue'],
        'correspondingAccount' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\BankingDetailsValue'],
        'bic' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\BankingDetailsValue'],
    ];

    protected static $nullables = ['operatingAccount' => false, 'correspondingAccount' => false, 'bic' => false];
}
