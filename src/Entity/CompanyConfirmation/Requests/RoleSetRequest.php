<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/requests/role-set-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос установки роли клиента
 * source: company-confirmation/requests/role-set-request.json
 *
 * @property string $role
 */
final class RoleSetRequest extends AbstractEntity
{
    protected static $types = ['role' => ['string']];
    protected static $nullables = ['role' => false];
}
