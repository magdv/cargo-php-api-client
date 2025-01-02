<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для отправки ссылки на доверенность
 * source: order/Common/requests/proxy-public-link-data-request.json
 *
 * @property string[] $email
 */
final class ProxyPublicLinkDataRequest extends AbstractEntity
{
    protected static $types = ['email' => ['array', 'string']];
    protected static $nullables = ['email' => false];
}
