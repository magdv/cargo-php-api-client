# # IssueCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**issue_certificate_id** | **string** | Идентификатор запроса на сертификат |
**certificate_id** | **string** | Идентификатор сертификата после прохождения подтверждения | [optional]
**status** | [**\MagDv\Cargomart\Dto\UserCertificateStatusEnum**](UserCertificateStatusEnum.md) | Статус выдачи сертификата |
**reject_comment** | **string** | Причина отказа подтверждения простой подписи | [optional]
**role** | [**\MagDv\Cargomart\Dto\SimpleSignatureRoleEnum**](SimpleSignatureRoleEnum.md) | Роль для работы с простой подписью | [optional]
**last_name** | **string** | Фамилия указанная в форме выдаче ПЭП | [optional]
**first_name** | **string** | Имя указанное в форме выдаче ПЭП | [optional]
**second_name** | **string** | Отчество указанное в форме выдаче ПЭП | [optional]
**certificate** | [**\MagDv\Cargomart\Dto\Certificate**](Certificate.md) | Сертификат | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
