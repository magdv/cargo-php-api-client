<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/storage-point/{id}/contact
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Requests\SpContact;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\ContactList;

final class ContactPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * @deprecated. Использовать вместе с редактированием SP. Создание контакта пункта погрузки выгрузки
     *
     * @return ContactList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(SpContact $body): ContactList
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ContactList::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
