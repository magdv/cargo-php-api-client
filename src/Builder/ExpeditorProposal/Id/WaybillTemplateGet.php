<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/waybill-template
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\FileLinkResponse;

final class WaybillTemplateGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Скачать транспортную накладную (подготовить ссылку на скачивание) не для ГП
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
     * Формат формирования накладной.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFormat(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['format']);
        } else {
            $c->query['format'] = $value;
        }

        return $c;
    }

    /**
     * Индексы точек погрузки, которые указать в ТН, 2-шт
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qPointIndex(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['pointIndex']);
        } else {
            $c->query['pointIndex'] = $value;
        }

        return $c;
    }
}
