<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к доверенности заказа экспедитора
 * source: expeditor/objects/proposal-proxy-access.json
 *
 * @property bool $createProxyFile
 * @property bool $createProxySign
 * @property bool $createCancellation
 * @property bool $createSignCancellation
 */
final class ProposalProxyAccess extends AbstractEntity
{
    protected static $types = [
        'createProxyFile' => ['bool'],
        'createProxySign' => ['bool'],
        'createCancellation' => ['bool'],
        'createSignCancellation' => ['bool'],
    ];

    protected static $nullables = [
        'createProxyFile' => false,
        'createProxySign' => false,
        'createCancellation' => false,
        'createSignCancellation' => false,
    ];
}
