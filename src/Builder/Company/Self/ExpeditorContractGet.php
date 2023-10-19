<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyExpeditorContractResponse;

class ExpeditorContractGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['proxyType' => 'all'];

    /** @var string[] */
    public $headers = [];

    /**
     * Вывод списка экспедиторских договоров.
     *
     * @return CompanyExpeditorContractResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyExpeditorContractResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyExpeditorContractResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Все, админ ПЭП или пользователь ПЭП
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qProxyType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['proxyType']);
        } else {
            $c->query['proxyType'] = $value;
        }

        return $c;
    }
}
