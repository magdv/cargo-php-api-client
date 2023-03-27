<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/storage-point/{id}/contact/{contactId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint\Id\Contact;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

final class ContactIdDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * @deprecated. Использовать вместе с редактированием SP. Удаление одного контакта пункта погрузки/выгрузки
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
