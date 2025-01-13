# # OrderDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор документа |
**name** | **string** | Наименование документа | [optional]
**number** | **string** | Номер документа | [optional]
**date** | **\DateTime** | Дата документа в формате YYYY-mm-dd | [optional]
**type** | [**\MagDv\Cargomart\Dto\OrderDocumentTypeEnum**](OrderDocumentTypeEnum.md) | Тип документа |
**status** | [**\MagDv\Cargomart\Dto\OrderDocumentStatusEnum**](OrderDocumentStatusEnum.md) |  |
**reject_reason** | **string** | Причина отклонения | [optional]
**files** | [**\MagDv\Cargomart\Dto\FileV2[]**](FileV2.md) | Файлы документа | [optional]
**version** | **int** | Версия документа | [optional]
**access** | [**\MagDv\Cargomart\Dto\OrderDocumentAccess**](OrderDocumentAccess.md) | Описание доступных действий по документу. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
