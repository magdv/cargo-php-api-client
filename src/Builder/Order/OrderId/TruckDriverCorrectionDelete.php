<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\MessageResponse;

class TruckDriverCorrectionDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отмена запроса на изменение водителя или машины.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): MessageResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            MessageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
