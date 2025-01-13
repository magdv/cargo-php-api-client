# # UserCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор подписи |
**status** | [**\MagDv\Cargomart\Dto\UserCertificateStatusEnum**](UserCertificateStatusEnum.md) | Статус сертификата |
**serial_id** | **int** | Порядковый номер сертификата |
**company_name** | **string** | Компания |
**branch_id** | **string** | Идентификатор дочерней компании | [optional]
**system_company_name** | **string** | Название компании системы | [optional]
**contract_number** | **string** | Номер договора экспедитора | [optional]
**contract_date** | **\DateTime** | Дата договора экспедитора | [optional]
**start_date** | **\DateTime** | Дата начала действия сертификата | [optional]
**end_date** | **\DateTime** | Дата окончания действия сертификата | [optional]
**receiver_id** | **int** | Идентификатор получателя |
**receiver_phone** | **string** | Номер получателя |
**receiver_last_name** | **string** | Фамилия указанная в форме выдаче ПЭП |
**receiver_first_name** | **string** | Имя указанное в форме выдаче ПЭП |
**receiver_second_name** | **string** | Отчество указанное в форме выдаче ПЭП | [optional]
**proxy_type** | [**\MagDv\Cargomart\Dto\UserCertificateProxyTypeEnum**](UserCertificateProxyTypeEnum.md) | Тип доверенности в сертификате (ПЭП админ) |
**certificate_file** | [**\MagDv\Cargomart\Dto\FileUrl**](FileUrl.md) | Ссылка на файл сертификата | [optional]
**issue** | [**\MagDv\Cargomart\Dto\UserCertificateIssue**](UserCertificateIssue.md) |  | [optional]
**revoke** | [**\MagDv\Cargomart\Dto\UserCertificateRevoke**](UserCertificateRevoke.md) |  | [optional]
**contract** | [**\MagDv\Cargomart\Dto\CertificateContract**](CertificateContract.md) | Данные договора |
**access** | [**\MagDv\Cargomart\Dto\UserCertificateAccess**](UserCertificateAccess.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
