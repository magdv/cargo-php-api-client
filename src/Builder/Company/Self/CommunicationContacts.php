<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/communication-contacts
 */
final class CommunicationContacts extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/communication-contacts';

    public function get(): CommunicationContactsGet
    {
        return new CommunicationContactsGet($this->client, $this->getUrl());
    }

    public function put(): CommunicationContactsPut
    {
        return new CommunicationContactsPut($this->client, $this->getUrl());
    }
}
