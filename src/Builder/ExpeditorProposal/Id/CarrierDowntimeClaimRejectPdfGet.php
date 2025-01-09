<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class CarrierDowntimeClaimRejectPdfGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Превью документа отклонения Экспедитором претензии Перевозчика о простое по заявке
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Причина.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qReason(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['reason']);
        } else {
            $c->query['reason'] = $value;
        }

        return $c;
    }
}
