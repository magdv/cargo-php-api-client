<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/partner-invite
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/partner-invite
 */
final class PartnerInvite extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/partner-invite';

    public function put(): PartnerInvitePut
    {
        return new PartnerInvitePut($this->client, $this->getUrl());
    }
}
