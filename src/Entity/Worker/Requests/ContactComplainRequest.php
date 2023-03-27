<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/requests/contact-complain-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Добавление жалобы на контакты сотрудника
 * source: worker/requests/contact-complain-request.json
 *
 * @property string $orderId
 * @property string $reason
 */
final class ContactComplainRequest extends AbstractEntity
{
    protected static $types = ['orderId' => ['string'], 'reason' => ['string']];
    protected static $nullables = ['orderId' => false, 'reason' => false];
}
