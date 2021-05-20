<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DriverApp;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DriverApp\Responses\DriverAppPhoneListResponse;

class DetailGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить по группе номеров телефона информацию о статусе установки 'приложения водителя'.
     *
     * @return DriverAppPhoneListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): DriverAppPhoneListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            DriverAppPhoneListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Номера телефонов
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qPhones(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['phones']);
        } else {
            $c->query['phones'] = $value;
        }

        return $c;
    }
}
