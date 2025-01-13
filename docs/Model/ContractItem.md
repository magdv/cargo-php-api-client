# # ContractItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор элемента списка |
**number** | **string** | Номер договора. |
**date** | **\DateTime** | Дата договора |
**certificate_url** | **string** | Ссылка на сертификат ключей ПЭП | [optional]
**certificate_file_id** | **string** | ID файла сертификата ключей ПЭП | [optional]
**contract_file_id** | **string** | ID файла договора | [optional]
**contract_pdf_url** | **string** | Ссылка на сгенерированный документ | [optional]
**status** | [**\MagDv\Cargomart\Dto\ExpeditorContractStatus**](ExpeditorContractStatus.md) | Статус договора |
**end_blocking_date** | **\DateTime** | Дата, до которой(включительно) действует блокировка договора | [optional]
**client_comment** | **string** | Комментарий для клиента от экспедитора | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
