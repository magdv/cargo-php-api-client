<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\File\Responses\FileList;

class FileGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['filter[fileType]' => 'document'];

    /** @var string[] */
    public $headers = [];

    /**
     * По идентификатору пользователя ищутся все временные файлы.
     *
     * @return FileList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): FileList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            FileList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Тип файла
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterFileType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[fileType]']);
        } else {
            $c->query['filter[fileType]'] = $value;
        }

        return $c;
    }
}
