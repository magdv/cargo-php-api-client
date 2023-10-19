<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateListResponse;

class CertificateGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['filter[proxyType]' => 'user'];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить список сертификатов текущего пользователя
     *
     * @return UserCertificateListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): UserCertificateListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            UserCertificateListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Тип доверенности.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterProxyType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[proxyType]']);
        } else {
            $c->query['filter[proxyType]'] = $value;
        }

        return $c;
    }

    /**
     * Статус сертификата.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[status]']);
        } else {
            $c->query['filter[status]'] = $value;
        }

        return $c;
    }
}
