<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект процесса подписания доверенности
 * source: expeditor/Common/objects/proposal-proxy.json
 *
 * @property string $proxyId
 * @property string $url
 * @property string $title
 * @property string $extension
 * @property string $proxyUrl
 * @property string $proxySignUrl
 * @property string $proxyPackUrl
 * @property string $cancellationUrl
 * @property string $cancellationSignUrl
 * @property string $status
 * @property ProposalProxyAccess $access
 */
final class ProposalProxy extends AbstractEntity
{
    protected static $types = [
        'proxyId' => ['string'],
        'url' => ['string'],
        'title' => ['string'],
        'extension' => ['string'],
        'proxyUrl' => ['string'],
        'proxySignUrl' => ['string'],
        'proxyPackUrl' => ['string'],
        'cancellationUrl' => ['string'],
        'cancellationSignUrl' => ['string'],
        'status' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalProxyAccess'],
    ];

    protected static $nullables = [
        'proxyId' => false,
        'url' => false,
        'title' => false,
        'extension' => false,
        'proxyUrl' => false,
        'proxySignUrl' => false,
        'proxyPackUrl' => false,
        'cancellationUrl' => false,
        'cancellationSignUrl' => false,
        'status' => false,
        'access' => false,
    ];
}
