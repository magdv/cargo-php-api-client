# # StoragePointItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор точки погрузки |
**code** | **string** | @deprecated КЛАДР код локации. Вместо этого использовать addressObject. | [optional]
**title** | **string** | Название пункта маршрута | [optional]
**locality_name** | **string** | Название населенного пункта | [optional]
**address** | **string** | @deprecated Адрес пункта маршрута. Вместо этого использовать addressObject. | [optional]
**address_info** | [**\MagDv\Cargomart\Dto\AddressInfo**](AddressInfo.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**address_object** | [**\MagDv\Cargomart\Dto\Address**](Address.md) | Адрес пункта погрузки/выгрузки в виде объекта | [optional]
**work_schedule** | [**\MagDv\Cargomart\Dto\WorkSchedule**](WorkSchedule.md) |  | [optional]
**house** | **string** | @deprecated Номер дома пункта маршрута. Вместо этого использовать addressObject. | [optional]
**comment** | **string** | Комментарий пункта маршрута | [optional]
**contact** | [**\MagDv\Cargomart\Dto\CustomContactInner[]**](CustomContactInner.md) | Базовая контактная информация | [optional]
**coordinate** | [**\MagDv\Cargomart\Dto\Coordinate**](Coordinate.md) | @deprecated Координаты пункта. Вместо этого использовать addressObject. | [optional]
**legal_status** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус | [optional]
**legal_name** | **string** | Юридическое наименование или ФИО | [optional]
**status** | [**\MagDv\Cargomart\Dto\StoragePointStatusEnum**](StoragePointStatusEnum.md) | Статус корректности данных. 0 - статус не определен, 1 - данные корректны, 2 - неверные координаты | [optional]
**is_edm** | **bool** | Участвует в обмене ЭТрН | [optional] [default to false]
**point_shipper_diadoc_box_data** | [**\MagDv\Cargomart\Dto\DiadocBoxIdData**](DiadocBoxIdData.md) | Данные грузоотправителя из Диадока для отправки документов | [optional]
**point_shipper** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Грузополучатель/грузоотправитель | [optional]
**file_ids** | **int[]** | Идентификаторы файлов со схемой проезда | [optional]
**contract_number** | **string** | Номер договора грузоотправителя | [optional]
**contract_date** | **\DateTime** | Дата договора грузоотправителя | [optional]
**storage_type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип пункта погрузки | [optional]
**is_owner_point_shipper** | **bool** | Совпадает ли владелец с грузоотправителем | [optional] [default to false]
**owner** | [**\MagDv\Cargomart\Dto\PointShipper**](PointShipper.md) | Владелец инфраструктуры склада | [optional]
**email_list** | [**\MagDv\Cargomart\Dto\PointEmailContact[]**](PointEmailContact.md) | Список email для пунктов, отображается только владельцу или экспедитору | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
