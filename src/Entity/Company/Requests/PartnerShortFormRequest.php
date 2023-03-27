<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/requests/partner-short-form-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Форма отказа/удаления партнерства
 * source: company/requests/partner-short-form-request.json
 *
 * @property string $message
 */
final class PartnerShortFormRequest extends AbstractEntity
{
    protected static $types = ['message' => ['string']];
    protected static $nullables = ['message' => false];
}
