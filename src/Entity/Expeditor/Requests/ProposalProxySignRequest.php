<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные подписи доверенности
 * source: expeditor/requests/proposal-proxy-sign-request.json
 *
 * @property string $sign
 * @property string $type
 */
final class ProposalProxySignRequest extends AbstractEntity
{
    protected static $types = ['sign' => ['string'], 'type' => ['string']];
    protected static $nullables = ['sign' => false, 'type' => false];
}
