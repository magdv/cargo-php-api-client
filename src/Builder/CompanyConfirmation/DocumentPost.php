<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Responses\Status;

class DocumentPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Загрузка нового документа
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): Status
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            Status::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Тип загружаемого документа.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['type']);
        } else {
            $c->query['type'] = $value;
        }

        return $c;
    }
}
