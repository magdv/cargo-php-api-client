# # EcnAdditionalData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\MagDv\Cargomart\Dto\EcnType**](EcnType.md) |  |
**external_number** | **string** | Внешний номер ТРН | [optional]
**operator** | [**\MagDv\Cargomart\Dto\EcnOperatorEnum**](EcnOperatorEnum.md) |  | [optional]
**point_index_from** | **int** | Индекс пункта погрузки из маршрута |
**point_index_to** | **int** | Индекс пункта выгрузки из маршрута |
**cargo_condition** | **string** | Состояние груза | [optional]
**packing_method** | **string** | Способ упаковки | [optional]
**container_type** | **string** | Вид тары | [optional]
**packages_number** | **int** | Количество грузовых мест | [optional]
**weight** | [**\MagDv\Cargomart\Dto\WaybillWeight**](WaybillWeight.md) | Вес | [optional]
**arrival** | [**\MagDv\Cargomart\Dto\WaybillDate**](WaybillDate.md) | Прибытие | [optional]
**departure** | [**\MagDv\Cargomart\Dto\WaybillDate**](WaybillDate.md) | Отправление | [optional]
**documents** | [**\MagDv\Cargomart\Dto\EcnAdditionalDataDocuments**](EcnAdditionalDataDocuments.md) |  | [optional]
**loader_person** | [**\MagDv\Cargomart\Dto\EcnAdditionalDataLoaderPerson**](EcnAdditionalDataLoaderPerson.md) |  | [optional]
**consignor_mark** | [**\MagDv\Cargomart\Dto\ConsignorMarkEnum**](ConsignorMarkEnum.md) |  | [optional]
**mark_comment** | **string** | Комментарий к отметке | [optional]
**notify_params** | [**\MagDv\Cargomart\Dto\NotifyParamItem[]**](NotifyParamItem.md) | Список параметров для рассылки уведомлений по ЭТРН | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
