# # OrderPatchLastItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор запроса на изменение |
**type** | [**\MagDv\Cargomart\Dto\OrderPatchType**](OrderPatchType.md) |  | [optional]
**status_id** | [**\MagDv\Cargomart\Dto\OrderPatchStatus**](OrderPatchStatus.md) |  |
**reason** | **string** | Причина отклонения/отмены запроса на изменение заказа | [optional]
**comment_for_consignor** | **string** | Комментарий для заказчика | [optional]
**comment_for_carrier** | **string** | Комментарий для перевозчика | [optional]
**create_date** | **\DateTime** | Дата создания запроса на изменение заказа | [optional]
**creator_id** | **int** | Создатель запроса на изменение заказа | [optional]
**update_date** | **\DateTime** | Дата изменения запроса на изменение заказа | [optional]
**access** | [**\MagDv\Cargomart\Dto\OrderPatchAccess**](OrderPatchAccess.md) | Описание доступных действий по объекту заявка на изменение. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
