# # StoragePointExport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id пункта | [optional]
**address_info** | [**\MagDv\Cargomart\Dto\AddressInfo**](AddressInfo.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**address_object** | [**\MagDv\Cargomart\Dto\Address**](Address.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**code** | **string** | @deprecated Кладр код пункта. Вместо этого использовать addressObject. | [optional]
**title** | **string** | Название пункта | [optional]
**address** | **string** | @deprecated Адрес пункта. Вместо этого использовать addressObject. | [optional]
**locality_name** | **string** | Краткое название пункта / полное название | [optional]
**legal_status** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус | [optional]
**legal_name** | **string** | Юридическое наименование или ФИО | [optional]
**is_edm** | **bool** | Участвует в обмене ЭТрН | [optional] [default to false]
**point_shipper** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Грузополучатель/грузоотправитель | [optional]
**house** | **string** | @deprecated Дом. Вместо этого использовать addressObject. | [optional]
**comment** | **string** | Комментарий | [optional]
**latitude** | **float** | @deprecated Широта. Вместо этого использовать addressObject. | [optional]
**longitude** | **float** | @deprecated Долгота. Вместо этого использовать addressObject. | [optional]
**storage_type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип пункта погрузки | [optional]
**owner** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Владелец инфраструктуры склада | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
