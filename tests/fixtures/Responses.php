<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests\fixtures;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class Responses
{
    /**
     * Пример ответа для /api/v2/locality.
     *
     * @return Response
     */
    public static function localityResponse(): Response
    {
        return new Response(
            200,
            [
                'content-type' => 'application/json; charset=UTF-8',
            ],
            <<<JSON
{
  "data": {
    "locality": [
      {
        "id": "0017700000000000",
        "name": "Москва",
        "type": "город",
        "level": 20,
        "isSettlement": true,
        "fullName": "город Москва, Россия",
        "shortName": "г Москва, Россия",
        "sectionId": "CENTRAL"
      }
    ],
    "pagination": {
      "perPage": 20,
      "page": 1
    }
  }
}
JSON
        );
    }

    /**
     * Пример ответа c токеном для /api/v2/login.
     *
     * @return Response
     */
    public static function loginOkResponse(): Response
    {
        return new Response(
            200,
            [
                'content-type' => 'application/json; charset=UTF-8',
            ],
            <<<JSON
{
  "data": {
    "token": {
      "token": "1234567890"
    }
  }
}
JSON
        );
    }

    /**
     * Пример ответа c токеном для /api/v2/login.
     *
     * @return Response
     */
    public static function loginBadResponse(): Response
    {
        return new Response(
            400,
            [
                'content-type' => 'application/json; charset=UTF-8',
            ],
            <<<JSON
{
  "message": [
    {
      "type": "error",
      "validator": "global",
      "code": 431,
      "title": "Логин или пароль не верны."
    }
  ]
}
JSON
        );
    }

    /**
     * Пример ответа ошибки 500 в формате json.
     *
     * @return Response
     */
    public static function json500Error(): Response
    {
        return new Response(
            500,
            [
                'content-type' => 'application/json; charset=UTF-8',
            ],
            <<<JSON
{
  "message": [
    {
      "type": "error",
      "validator": "global",
      "code": 500,
      "title": "Произошла внутренняя ошибка сервера."
    }
  ]
}
JSON
        );
    }

    /**
     * Пример ответа ошибки 500 в формате json.
     *
     * @return Response
     */
    public static function internal504Error(): Response
    {
        return new Response(
            504,
            [
                'content-type' => 'text/html',
            ],
            <<<HTML
<!DOCTYPE html><html lang="ru"><head><title>504</title></head><body>504</body></html>
HTML
        );
    }

    /**
     * Пример ответа ошибки 500 в формате json.
     *
     * @return RequestException
     */
    public static function communicationError(): RequestException
    {
        return new RequestException('Error Communicating with Server', new Request('GET', 'test'));
    }

    /**
     * Пример ответа ошибки 401 в формате json.
     *
     * @return Response
     */
    public static function unauthorizedError(): Response
    {
        return new Response(
            401,
            [
                'content-type' => 'application/json; charset=UTF-8',
            ],
            <<<JSON
{
  "message": [
    {
      "type": "error",
      "validator": "global",
      "code": 401,
      "title": "Для доступа к запрашиваемому ресурсу требуется аутентификация."
    }
  ]
}
JSON
        );
    }
}
