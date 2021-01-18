<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: company/responses/partner-status-response.json#/properties/data
 *
 * @property int $partnerStatus
 */
final class PartnerStatusResponseData extends AbstractEntity
{
    protected static $types = ['partnerStatus' => ['int']];
    protected static $nullables = ['partnerStatus' => false];
}
