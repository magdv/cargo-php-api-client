<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/storage-point/{id}/contact
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\ContactList;

final class ContactGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * @deprecated. Использовать вместе с редактированием SP. Получение списка контактов пункта погрузки/выгрузки
     *
     * @return ContactList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ContactList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ContactList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
