<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\SignedDocument\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/signed-document/{id}/pdf
 */
final class Pdf extends AbstractBuilder
{
    protected const URL = '/api/v2/signed-document/{id}/pdf';

    public function get(): PdfGet
    {
        return new PdfGet($this->client, $this->getUrl());
    }
}
