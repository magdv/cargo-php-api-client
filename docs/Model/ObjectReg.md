# # ObjectReg

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор |
**type** | [**\MagDv\Cargomart\Dto\LoginTypeEnum**](LoginTypeEnum.md) |  |
**login** | **string** | Логин (email или phone) |
**delay** | **int** | Время ожидания до возможности повторной отправки проверочного кода(ms) | [optional]
**available_resend_code_date** | **\DateTime** | Время, когда будет возможна повторная отправка проверочного кода | [optional]
**password** | **string** | Автосгенерированный пароль | [optional]
**token** | **string** | Токен запроса на регистрацию. | [optional]
**expiration_date** | **\DateTime** | Срок действия проверочного кода. | [optional]
**is_invited** | **bool** | Пользователь приглашен на сайт другим пользователем. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
