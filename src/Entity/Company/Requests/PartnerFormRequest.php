<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/requests/partner-form-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\PartnerContractForm;

/**
 * Форма редактирования партнёрства
 * source: company/requests/partner-form-request.json
 *
 * @property string $message
 * @property PartnerContractForm[] $contract
 */
final class PartnerFormRequest extends AbstractEntity
{
    protected static $types = [
        'message' => ['string'],
        'contract' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PartnerContractForm'],
    ];

    protected static $nullables = ['message' => false, 'contract' => false];
}
