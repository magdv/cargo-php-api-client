# # UserRecovery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор |
**type** | [**\MagDv\Cargomart\Dto\LoginTypeEnum**](LoginTypeEnum.md) |  |
**login** | **string** | Логин (email или phone) |
**delay** | **int** | Время ожидания до возможности повторной отправки проверочного кода (s) | [optional]
**available_resend_code_date** | **\DateTime** | Время, когда будет возможна повторная отправка проверочного кода | [optional]
**password** | **string** | Автосгенерированный пароль | [optional]
**token** | **string** | Токен авторизации, при автологине, после подстверждения восстановления. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
