# # OrderEcn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор Этрн |
**order_id** | **string** | Идентификатор заказа |
**serial_id** | **int** | Порядковый номер заказа | [optional]
**departure_name** | **string** | Название места погрузки |
**departure_legal_name** | **string** | Наименование грузоотправителя | [optional]
**destination_name** | **string** | Название места выгрузки |
**destination_legal_name** | **string** | Наименование грузополучателя | [optional]
**type** | [**\MagDv\Cargomart\Dto\EcnType**](EcnType.md) |  |
**number** | **string** | Номер документа |
**external_number** | **string** | Внешний номер ТРН | [optional]
**version** | **int** | Версия документа |
**point_index_from** | **int** | Индекс пункта погрузки из маршрута |
**point_index_to** | **int** | Индекс пункта выгрузки из маршрута |
**status** | [**\MagDv\Cargomart\Dto\EcnStatus**](EcnStatus.md) |  |
**edm_operator_status** | [**\MagDv\Cargomart\Dto\OrderEcnItemEdmOperatorStatus**](OrderEcnItemEdmOperatorStatus.md) |  | [optional]
**status_group** | [**\MagDv\Cargomart\Dto\EcnStatusGroup**](EcnStatusGroup.md) |  | [optional]
**update_date** | **\DateTime** | Дата изменения | [optional]
**additional_data** | [**\MagDv\Cargomart\Dto\EcnAdditionalData**](EcnAdditionalData.md) | Данные для генерации накладной |
**ecn_file** | [**\MagDv\Cargomart\Dto\FileV2**](FileV2.md) | Файл ЭТРН | [optional]
**pdf** | [**\MagDv\Cargomart\Dto\FileUrl**](FileUrl.md) | Ссылка для скачивания накладной в формате PDF | [optional]
**xls** | [**\MagDv\Cargomart\Dto\FileUrl**](FileUrl.md) | Ссылка для скачивания накладной в формате XLS | [optional]
**xml** | [**\MagDv\Cargomart\Dto\FileUrl**](FileUrl.md) | Ссылка для скачивания накладной в формате XML | [optional]
**notify_params** | [**\MagDv\Cargomart\Dto\NotifyParamItem[]**](NotifyParamItem.md) | Список параметров для рассылки уведомлений по ЭТРН | [optional]
**access** | [**\MagDv\Cargomart\Dto\OrderEcnAccess**](OrderEcnAccess.md) | Описание доступных действий по объекту. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
