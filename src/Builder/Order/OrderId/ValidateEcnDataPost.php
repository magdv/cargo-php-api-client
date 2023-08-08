<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Objects\EcnAdditionalData;
use Cargomart\ApiClient\Entity\Order\Responses\OrderValidateEcnResponse;

class ValidateEcnDataPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Проверка данных ЭТрН заказа перед созданием.
     *
     * @return OrderValidateEcnResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(EcnAdditionalData $body): OrderValidateEcnResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderValidateEcnResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
