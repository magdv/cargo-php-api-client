<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\FileLinkResponse;

class GeneralPartnerProposalTemplateGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Генеральный партнер. Скачать заяку на заказ для ГП.
     *
     * @return FileLinkResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): FileLinkResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            FileLinkResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Убрать печать из заявки
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qRemoveFacsimile(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['removeFacsimile']);
        } else {
            $c->query['removeFacsimile'] = $value;
        }

        return $c;
    }
}
