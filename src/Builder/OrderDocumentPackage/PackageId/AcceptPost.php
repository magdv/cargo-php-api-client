<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\MessageResponse;

class AcceptPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение что пакет сканов документов перевозчика принят
     *
     * @return MessageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): MessageResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            MessageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
