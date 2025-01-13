# # Certificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certificate_id** | **string** | Идентификатор сертификата |
**certificate_number** | **int** | Номер сертификата в реестре |
**signer_name** | **string** | ФИО подписанта | [optional]
**is_active** | **bool** | Действителен ли сертификат | [default to false]
**status** | [**\MagDv\Cargomart\Dto\UserCertificateStatusEnum**](UserCertificateStatusEnum.md) | Статус сертификата |
**client_id** | **int** | Идентификатор компании в которой действителен сертификат |
**create_date** | **\DateTime** | Дата выдачи |
**end_date** | **\DateTime** | Дата окончания действия |
**recall_date** | **\DateTime** | Дата отзыва сертификата | [optional]
**url** | **string** | Ссылка на файл сертификата ключей ПЭП | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
