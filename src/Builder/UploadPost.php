<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\File\Responses\FileV2Item;

class UploadPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Файл помечается как временный и привязывается к тому, кто его загрузил. При успешной загрузке возвращает доступное имя для документа.
     *
     * @return FileV2Item
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): FileV2Item
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            FileV2Item::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Тип загружаемого временного файла
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
