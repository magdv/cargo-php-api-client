<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/communication-contacts
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\CommunicationContactsRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CommunicationContactsResponse;

final class CommunicationContactsPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод редактирует контакты для связи.
     *
     * @return CommunicationContactsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(CommunicationContactsRequest $body): CommunicationContactsResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            CommunicationContactsResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
