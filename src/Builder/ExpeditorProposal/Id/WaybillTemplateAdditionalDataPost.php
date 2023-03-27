<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/waybill-template-additional-data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Objects\WaybillAdditionalData;
use Cargomart\ApiClient\Entity\Order\Responses\WaybillAdditionalDataResponse;

final class WaybillTemplateAdditionalDataPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Сохранить расширенные параметры для генерации накладной
     *
     * @return WaybillAdditionalDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(WaybillAdditionalData $body): WaybillAdditionalDataResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            WaybillAdditionalDataResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
