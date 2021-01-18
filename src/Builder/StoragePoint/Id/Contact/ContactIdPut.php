<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint\Id\Contact;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Requests\SpContact;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\ContactList;

class ContactIdPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование контакта пункта погрузки/выгрузки
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(SpContact $body): ContactList
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            ContactList::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
