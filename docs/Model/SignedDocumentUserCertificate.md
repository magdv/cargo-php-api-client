# # SignedDocumentUserCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор сертификата |
**number** | **int** | Номер сертификата | [optional]
**start_date** | **\DateTime** | Дата начала срока действия |
**end_date** | **\DateTime** | Дата окончания срока действия |
**activate_date** | **\DateTime** | Дата подтверждения получения сертификата ПЭП владельцем | [optional]
**branch_id** | **string** | Идентификатор компании-дочки на которую сертификат выпущен | [optional]
**client_name** | **string** | Название компании |
**client_inn** | **string** | ИНН компании |
**client_ogrn** | **string** | ОГРН компании | [optional]
**client_address** | **string** | Адрес компании | [optional]
**receiver_last_name** | **string** | Фамилия подписанта |
**receiver_first_name** | **string** | Имя подписанта |
**receiver_second_name** | **string** | Отчество подписанта | [optional]
**user_id** | **int** | Идентификатор пользователя - владельца сертификата | [optional]
**phone** | **string** | Телефон владельца сертификата для получения одноразовых ключей | [optional]
**contract** | [**\MagDv\Cargomart\Dto\CertificateContract**](CertificateContract.md) | Данные договора | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
