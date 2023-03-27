<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/proxy-public-link-data-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для отправки ссылки на доверенность
 * source: order/requests/proxy-public-link-data-request.json
 *
 * @property string[] $email
 */
final class ProxyPublicLinkDataRequest extends AbstractEntity
{
    protected static $types = ['email' => ['array', 'string']];
    protected static $nullables = ['email' => false];
}
