<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/requests/proposal-proxy-sign-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные подписи доверенности
 * source: expeditor/requests/proposal-proxy-sign-request.json
 *
 * @property string $sign
 * @property string $thumbprint
 */
final class ProposalProxySignRequest extends AbstractEntity
{
    protected static $types = ['sign' => ['string'], 'thumbprint' => ['string']];
    protected static $nullables = ['sign' => false, 'thumbprint' => false];
}
